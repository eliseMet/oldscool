@extends('web.layouts.default')


@section('title', "Inscription")
@section('favicon')
    <link rel="icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
@endsection
@section('meta-description', "En général, les balises meta description informent les internautes et éveillent leur intérêt avec un résumé court et pertinent de la page. Elles constituent une sorte d'argumentaire destiné à convaincre l'internaute que la page correspond exactement à sa recherche.")


@section('content')

<section>
    <div class="card card-form">
        <h1>Connexion</h1>
        <form method="POST" action="">
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
        </form>
    </div>
</section>

{{-- Vuejs App --}}
@endsection