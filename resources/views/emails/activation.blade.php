<!DOCTYPE html>
<html>
<head>
    <title>Activate Your Account</title>
</head>
<body>
    <h1>Hello, {{ $user->name }}</h1>
    <p>Please click the following link to activate your account:</p>
    <a href="{{ $link }}">Activate Account</a>
</body>
</html>
