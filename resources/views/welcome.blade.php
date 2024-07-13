<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
     @vite('resources/css/app.css')
    <title>ENT ENSA Tétouan</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        </head>
<body class="bg-blue-900  bg-luefont-sans">
<header class="bg-white">
    <nav class="flex justify-between items-center p-6 w-[100%] bg ">
        <div>
            <img class="w-16" src="{{ url('images/logo-ensa.png') }}">
        </div>
        <div class="md:staticabsolute bg-white md:min-h-fitmin-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
            <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                <li>
                    <a class="hover:text-gray-500" href="#">Home</a>
                </li>
                <li>
                    <a class="hover:text-gray-500 "href="#">ENSATe</a>
                </li>
                <li>
                    <a class="hover:text-gray-500"href="#">Contact us</a>
                </li>
            </ul>
        </div>
        <div>
            <button class="bg-blue-900 text-white px-5 py-2 ">
                Authentificate
            </button>
            <ion-icon name="menu-outline"></ion-icon>
        </div>
</nav>
</header>
    <section class="bg-blue-900 text-white">
        <div class="authentification flex flex-col items-center justify-center h-screen">
            <h1 class="text-4xl font-bold mb-6">ENT - ENSA Tétouan</h1>
            <p class="text-lg text-center mb-8 px-6">Etudiant, enseignant ou personnel, vous pouvez accèder à tous vos services via cette plateforme, il suffit d'activer votre compte en utilisant votre adresse institutionnelle, saisir un mot de passe.</p>
            <button class="auth-btn bg-blue-900 text-white px-8 py-3 rounded-lg hover:bg-blue-800"><a href="{{ url('login') }}">Authentificate</a></button>
        </div>
    </section>

    <section class="bg-cover bg-center">
        <div class="container max-w-7xl mx-auto py-12 px-4 md:flex md:justify-center md:gap-8">
            <div class="statistics bg-white text-blue-900 p-6 rounded-lg mb-4 md:w-64 md:text-center">
                <span class="material-symbols-rounded text-4xl"></span>
                <span class="num text-5xl font-bold" data-val="7000">000</span>
                <span class="text text-lg font-semibold">Filières</span>
            </div>
            <div class="statistics bg-white text-blue-900 p-6 rounded-lg mb-4 md:w-64 md:text-center">
                <span class="material-symbols-rounded text-4xl"></span>
                <span class="num text-5xl font-bold" data-val="94000">000</span>
                <span class="text text-lg font-semibold">Professeurs</span>
            </div>
            <div class="statistics bg-white text-blue-900 p-6 rounded-lg mb-4 md:w-64 md:text-center">
                <span class="material-symbols-rounded text-4xl"></span>
                <span class="num text-5xl font-bold" data-val="1409000">000</span>
                <span class="text text-lg font-semibold">Étudiants</span>
            </div>
            <div class="statistics bg-white text-blue-900 p-6 rounded-lg mb-4 md:w-64 md:text-center">
                <span class="material-symbols-rounded text-4xl"></span>
                <span class="num text-5xl font-bold" data-val="494000">000</span>
                <span class="text text-lg font-semibold">Stages PFE</span>
            </div>
        </div>
    </section>

    <footer class=" flex justify-between bg-blue-900 text-white py-12">
        <div class="footer max-w-7xl mx-auto px-4">
            <div class="row md:flex md:justify-between">
                <div class="col mb-8 md:w-1/3">
                    <img src="{{ asset('images/logo-ensa-white.png') }}" alt="ENSA Logo" class="logo h-16 mb-4">
                    <p class="text-lg">Etudiant, enseignant ou personnel, vous pouvez accèder à tous vos services via cette plateforme, il suffit d'activer votre compte en utilisant votre adresse institutionnelle, saisir un mot de passe.</p>
                </div>
                <div class="col mb-8 md:w-1/3">
                    <h3 class="text-lg font-semibold mb-4">Contact us</h3>
                    <p>Avenue de la Palestine Mhanech I, TÉTOUAN</p>
                    <p class="email">ensate@uae.ac.ma</p>
                    <h4 class="text-lg mt-4">05396-88027</h4>
                </div>
                <div class="col mb-8 md:w-1/3">
                    <h3 class="text-lg font-semibold mb-4">Follow us</h3>
                    <ul class="social-media flex space-x-4">
                        <li><a href="https://www.facebook.com/ensa.tetouan.officiel" class="social-icon"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/ensa_tetouan_officiel/" class="social-icon"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/school/ensa-tetouan/" class="social-icon"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
