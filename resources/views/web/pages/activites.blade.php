<!DOCTYPE html>
<html>
  <head>
    <!-- titre de l'onglet -->
    <title>Ma page d'accueil</title>

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
      <div class="header-logo">
        <!-- logo en haut à gauche -->
        <img class="logo" src="{{ asset('images/logoPNG/logoCercle1.png') }}" alt="Mon logo">
        <a class="btn-main" href="{{ url('/pagePrincipale') }}">old's cool</a>
      </div>

      <ul class="header-nav">
        <li class="header-item"><a href="#" class="header-link"><strong>Contact</strong></a></li>
        <li class="header-item"><a href="#" class="header-link"><strong>A propos</strong></a></li>
        <li class="header-item"><a href="#" class="header-link"><strong>Aide</strong></a></li>
      </ul>
    </header>

    <main>
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
        @if ($activities)
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
        @endif
      </div>

      <a class="btn-primary btn-home" href="{{ url('/nouvelleActivite') }}" >Ajouter une proposition d'activité</a>
    </main>
  </body>
</html>
