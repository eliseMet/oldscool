@extends('web.layouts.default')

@section('title', "Accueil")
@section('favicon')
    <link rel="icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
@endsection
@section('meta-description', "En général, les balises meta description informent les internautes et éveillent leur intérêt avec un résumé court et pertinent de la page. Elles constituent une sorte d'argumentaire destiné à convaincre l'internaute que la page correspond exactement à sa recherche.")


@section('content')

<section>
    <div class="hero">
      <img class="hero-background-img" src="img/web/photoAcceuil.png" alt="Mon fond">
      <div class="hero-content">
        <h2 class = "text-russo hero-title">Deux Générations,</h2>
        <h2 class = "text-russo hero-title">Une Passion Partagée</h2>
        <p class="hero-text"> Vous êtes étudiant et vous souhaitez faire des rencontres tout en apprennant, ne cherchez plus, inscrivez-vous ! Vous êtes un jeune retraité qui souhaite transmettre une passion à la jeune génération, inscrivez-vous !
        </p>
        <a href="/user/registration" class="btn-primary btn-xl"><strong>Nous rejoindre</strong></a>
      </div>
    </div>
</section>

<section class="container" id="reviews-cards-component">
    <h1 class="text-lg"> Avis utilisateurs </h1>
    <reviews-cards-component>
        
    </reviews-cards-component>
</section>

{{-- Vuejs App --}}
@endsection