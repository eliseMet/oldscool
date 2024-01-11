a<!DOCTYPE html>
<html>
<head>
    <title>Page de connexion</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('images/logoICON/logoCercle1.ico') }}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <header class="header">
        <div class="header-logo">
            <img class="logo" src="{{ asset('images/logoPNG/logoCercle1.png') }}" alt="Mon logo">
            <a class="btn-main" href="{{ url('/pagePrincipale') }}">old's cool</a>
        </div>
        <div class="display1">
            <p class="text-discret">Vous êtes nouveau sur Old's Cool ?</p>
            <a class="btn-primary" href="{{ url('/pageInscription') }}">Nous rejoindre</a>
        </div>
    </header>

    <div class="card card-form">
        <h1>Connexion</h1>
        <form method="POST" action="{{ route('connexion') }}">
            @csrf
            <div class="form-group">
                <label for="email">Adresse mail :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button class="btn-primary m-auto display-block" type="submit">Se connecter</button>
            <a href="{{ url('/accueil_connexion') }}">Se connecter (test)</a>
        </form>
    </div>
</body>
</html>
