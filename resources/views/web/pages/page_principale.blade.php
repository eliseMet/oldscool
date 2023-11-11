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

      <div class="header-logo" >
        <!-- logo en haut à gauche -->
        <img class="logo" src="{{ asset('images/logoPNG/logoCercle1.png') }}" alt="Mon logo">
        <a class="btn-main" href="{{ url('/pagePrincipale') }}"> old's cool </a>
      </div>

      <ul class="header-nav">
        <li class="header-item"><a href="#" class="header-link"><strong> Contact </strong></a></li>
        <li class="header-item"><a href="#" class="header-link"><strong> A propos</strong></a></li>
        <li class="header-item"><a href="#" class="header-link"><strong> Aide </strong></a></li>

        <li class="header-item">
          <a class="btn-primary" href="{{ url('/nousrejoindre') }}" >Nous rejoindre</a> 
        </li>
      </ul>
      
    </header>

    <main>

      <div class="hero">
        <img class="hero-img filter-grey" src="{{ asset('images/imageDeFond3.jpeg') }}" alt="Mon fond">
        <div class="hero-content">
          <h2 class="text-russo hero-title" style="text-align: center;">2 Générations, 1 Moment </h2>
          <p class="hero-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam consequatur quam natus similique! Voluptatem architecto fugit corrupti sint in laboriosam nihil reiciendis molestiae perferendis ? Odio modi molestias non molestiae ipsa ?</p>
        </div>
      </div>

      <section class="review container">

          <h2> Avis utilisateurs </h2>

          <div class="review-cards">

            <div class="card">
              <div class="titre-card">
                <img class="review-picture circle" src="{{ asset('images/avatars/avatarM.jpg') }}" alt="photo de profil monique">
                <h3>Monique, 60ans</h3>
              </div>
              <p> random avis </p>
            </div>

            <!-- (Répéter pour les autres cartes) -->
            
          </div>
      </section>
  
    </main>

    <footer class="footer">
      <p>random footer (a faire)</p>
    </footer>

  </body>

</html>
