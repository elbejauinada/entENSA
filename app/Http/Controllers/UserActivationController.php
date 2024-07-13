<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Mail\ActivationMail;

class UserActivationController extends Controller
{
    public function showActivationForm()
    {
        return view('auth.activate');
    }

    public function sendActivationEmail(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);

        $user = User::where('email', $request->email)->first();

        $token = Str::random(60);
        DB::table('password_reset_tokens')->insert([
            'email' => $user->email,
            'token' => Hash::make($token),
            'created_at' => now(),
        ]);

        $activationLink = route('activate.token', $token);

        Mail::to($user->email)->send(new ActivationMail($user, $activationLink));

        return redirect()->route('login')->with('status', 'We have emailed your activation link!');
    }

    public function showSetPasswordForm($token)
    {
        return view('auth.set_password', ['token' => $token]);
    }

    public function setPassword(Request $request, $token)
    {
        $request->validate([
            'password' => 'required|string|confirmed|min:8',
        ]);

        $reset = DB::table('password_reset_tokens')->where('token', $token)->first();

        if (!$reset || !Hash::check($token, $reset->token)) {
            return redirect()->route('activate.form')->withErrors(['email' => 'Invalid or expired token']);
        }

        $user = User::where('email', $reset->email)->first();
        $user->password = Hash::make($request->password);
        $user->status = 'active';
        $user->save();

        DB::table('password_reset_tokens')->where('email', $reset->email)->delete();

        return redirect()->route('login')->with('status', 'Your account has been activated! You can now log in.');
    }
}
