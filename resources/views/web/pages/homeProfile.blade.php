@extends('web.layouts.default')

@section('title', "Accueil")
@section('favicon')
    <link rel="icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
@endsection
@section('meta-description', "En général, les balises meta description informent les internautes et éveillent leur intérêt avec un résumé court et pertinent de la page. Elles constituent une sorte d'argumentaire destiné à convaincre l'internaute que la page correspond exactement à sa recherche.")


@section('content')

<section class="container">
    <div class="flex justify-center pt-8 gap-8">
        <div id="calendar-component" class="calendar-size">
            <calendar-component/>
        </div>
    
        <div class="border rounded-1 activity-size">
            <h1 class="activity-title">Activités</h1>
            <div class="flex justify-center gap-4">
                <a href="{{route('post.create')}}" class="btn-secondary"><strong>Déposer une activité</strong></a>
                <a href="{{route('post.index')}}" class="btn-secondary"><strong>Rechercher une activité</strong></a>
            </div>
        </div>
    </div>
    

</section>


@endsection
