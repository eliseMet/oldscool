<!DOCTYPE html>

<html>

    <head>

        <title>Page de nous rejoindre</title>

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
              <a class="btn-main" href="{{ url('/pagePrincipale') }}"> old's cool </a>
            </div>
      
            <div class="display1">
                <p class="text-discret">Vous avez déjà un compte ? </p>
                <a class="btn-primary" href="{{ url('/connexion') }}" >Se connecter</a> 
            </div>

        </header>

        <main>
              
            <section  class="review container">
                  
                <h2 style="text-align: center;">Pourquoi voulez-vous nous rejoindre ?</h2>

                <div class="display1 center1">

                    <div class="review-cards2 switch-picture2">
                        <div class="card container">
                            <img class="review-picture2 gap-vertical " src="{{ asset('images/nousRejoindre1.png') }}" alt="Photo 'donner'">
                            <p class="gap-vertical " style="text-align: center;">
                                Je suis ici pour transmettre quelque chose à une prochaine génération.
                            </p>
                            <a class="btn-primary" href="{{ url('/inscription') }}" >Je souhaite m'inscrire</a> 
                        </div>
                    </div>
    
                    <div class="review-cards2 switch-picture2">
                        <div class="card container">
                            <img class="review-picture2 gap-vertical" src="{{ asset('images/nousRejoindre2.png') }}" alt="Photo 'recevoir'">
                            <p class="gap-vertical " style="text-align: center;">
                                Je suis ici pour apprendre quelque chose d'une génération précédente.
                            </p>
                            <a class="btn-primary" href="{{ url('/inscription') }}" >Je souhaite m'inscrire</a> 
                        </div>
                    </div>
                </div>

                <p class="text-center">
                    Les informations précédentes nous permettent de personnaliser votre expérience. Vous pourrez transmettre et apprendre des choses comme bon vous semble, quelle que soit l’option choisie.
                </p>

            </section>

        </main>

        <footer class="footer">
        <p>random footer (a faire)</p>
        </footer>

    </body>

</html>
