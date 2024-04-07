@extends('web.layouts.default')

@section('title', "Accueil")

@section('favicon')
    <link rel="icon" href="{{ asset('img/web/LOGO.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('img/web/LOGO.ico') }}" type="image/x-icon"/>
@endsection

@section('meta-description', "Description ici.")

@section('content')
<section>
  <div class="activity-list">
    @forelse ($posts as $post)
      <div class="activity-box">
        <img class="activity-picture" src="{{ asset('images/path_to_default_image.jpg') }}" alt="photo de l'activité">
        <h4 class="activity-title">{{ $post->activity }}</h4>
        <h4>Le {{ $post->date }}</h4>
        <p class="activity-description">{{ $post->description }}</p>
        <a class="btn-primary btn-activity" href="#">Réserver</a>
      </div>
    @empty
      <p>Aucune activité trouvée.</p>
    @endforelse
  </div>

  <a class="btn-primary btn-home" href="{{ url('/newActivity') }}">Ajouter une proposition d'activité</a>
</section>
@endsection
