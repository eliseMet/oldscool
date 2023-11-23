<!DOCTYPE html>
<html>
<head>
    <title>Page d'inscription</title>
    <!-- lien vers le css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- favicon -->
    <link rel="icon" href="{{ asset('images/logoICON/logoCercle1.ico') }}" />
    <!-- encodage (accents etc) -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <header class="header">
        <div class="header-logo" >
            <img class="logo" src="{{ asset('images/logoPNG/logoCercle1.png') }}" alt="Mon logo">
            <a class="btn-main" href="{{ url('/pagePrincipale') }}">old's cool</a>
        </div>
        <div class="display1">
            <p class="text-discret">Vous avez déjà un compte ?</p>
            <a class="btn-primary" href="{{ url('/pageConnexion') }}">Se Connecter</a> 
        </div>
    </header>
    <main>
        <div class="card card-form">
            <h1>Inscription</h1>
            <div class="grid">
                <div class="grid-container">
                    <form class="grid-form" method="POST" action="{{ url('/ajoutUtilisateur') }}">
                        @csrf
                        <input type="text" name="firstname" placeholder="Prénom">
                        <input type="text" name="surname" placeholder="Nom">
                        <input type="text" name="email" placeholder="Adresse mail">
                        <input type="text" name="birthdate" placeholder="Date de naissance">
                        <input type="password" name="password" placeholder="Mot de passe">
                        <input type="submit" value="Créer un compte">
                    </form>
                </div>
            </div>
            <p class="text-discret" style="text-align: center; font-size: 10px;">
                En devenant membre, vous acceptez nos <a href="{{ url('/ConditionsUtilisation') }}">Conditions d'utilisation</a> et notre <a href="{{ url('/PolitiqueConfidentialite') }}">Politique de confidentialité</a>
            </p>
        </div>
    </main>
    <footer class="footer">
        <p>random footer (a faire)</p>
    </footer>
</body>
</html>
