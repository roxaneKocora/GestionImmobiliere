<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservations Immobilières</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>


</head>
<body class="bg-gray-100">
    <nav class="bg-primary text-white p-4">
        <div class="container mx-auto">
            <a href="/" class="font-bold">Accueil</a>
        </div>
    </nav>

    <div class="container mx-auto mt-4">
        @yield('content')
    </div>
</body>
</html>
