@extends('web.layouts.default')


@section('title', "Inscription")
@section('favicon')
    <link rel="icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
@endsection
@section('meta-description', "En général, les balises meta description informent les internautes et éveillent leur intérêt avec un résumé court et pertinent de la page. Elles constituent une sorte d'argumentaire destiné à convaincre l'internaute que la page correspond exactement à sa recherche.")


@section('content')




<section>
    <div class="card-form">
        <h1>Inscription</h1>
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
        <p class="text-discret" style="text-align: center; font-size: 10px;">
            En devenant membre, vous acceptez nos <a href="{{ url('/ConditionsUtilisation') }}">Conditions d'utilisation</a> et notre <a href="{{ url('/PolitiqueConfidentialite') }}">Politique de confidentialité</a>
        </p>
    </div>
</section>


{{-- Vuejs App --}}
@endsection