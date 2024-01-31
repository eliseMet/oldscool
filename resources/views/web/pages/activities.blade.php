@extends('web.layouts.default')

@section('title', "Accueil")
@section('favicon')
    <link rel="icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
@endsection
@section('meta-description', "En général, les balises meta description informent les internautes et éveillent leur intérêt avec un résumé court et pertinent de la page. Elles constituent une sorte d'argumentaire destiné à convaincre l'internaute que la page correspond exactement à sa recherche.")


@section('content')

<section>
  <div class="activityList">
    <!-- Exemple d'activité statique -->
    <div class="activityBox">
      <img class="activityPicture" src="{{ asset('images/avatars/avatarM.jpg') }}" alt="photo de profil monique">
      <h3 class="activityName">Monique, 64 ans</h3>
      <h4 class="activityTitle">Yoga</h4>
      <p class="activityDescription">Rejoignez Monique pour une session de yoga relaxante et revitalisante. Adaptée à tous les niveaux.</p>
      <!-- ... -->
    </div>

    <!-- Activités dynamiques depuis la base de données -->
    {{-- @if ($activities)
      @foreach ($activities as $activity)
        <div class="activityBox">
          <img class="activityPicture" src="{{ asset('images/avatars/jean.jpg') }}" alt="photo de profil jean">
          <h3 class="activityName">{{ $activity->first_name }}, {{ $activity->age }} ans</h3>
          <h4 class="activityTitle">{{ $activity->activity }}</h4>
          <p class="activityDescription">{{ $activity->description }}</p>
          <a class="btn-primary btn-activity" href="#" >Réserver</a>
        </div>
      @endforeach
    @else
        <p>Aucune activité trouvée.</p>
    @endif --}}
  </div>

  <a class="btn-primary btn-home" href="{{ url('/newActivity') }}">Ajouter une proposition d'activité</a>
</section>

{{-- Vuejs App --}}
@endsection