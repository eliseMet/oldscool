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
        <h2 class = "hero-title">Deux Générations, Un Moment </h2>
        <p class="hero-text"> Vous êtes étudiant et vous souhaitez faire des rencontres tout en apprennant, ne cherchez plus, inscrivez-vous ! Vous êtes un jeune retraité qui souhaite transmettre une passion à la jeune génération, inscrivez-vous !
        </p>
        <button class="btn-primary btn-xl">Nous rejoindre</button>
      </div>
    </div>
</section>

<section class="container" id="reviews-cards-component">
    <h1 class="text-lg"> Avis utilisateurs </h1>
    <reviews-cards-component>
        
    </reviews-cards-component>
</section>



<section class="container">
    <div class="flex gap-4">
        <x-card class="flex-1">
            <x-slot:head>
               <h2>H2 Title</h2> 
        </x-slot:head>
            <x-slot:main>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt fugiat sequi nostrum. Facere, modi error minus esse corrupti perferendis provident vero dignissimos in voluptatum ratione libero harum sequi voluptatibus, iusto delectus dolorem maxime illum nesciunt sit doloremque. Molestiae doloremque commodi facere, eaque vel praesentium autem, officia nobis et rerum magnam.
                    </p>
                </div>
            </x-slot:main>
            <x-slot:footer>
                <a class="btn-secondary">Secondary Button</a>
            </x-slot:footer>
        </x-card>

        <x-card class="flex-1">
            <x-slot:head>
                <h2>H2 Title</h2> 
            </x-slot:head>
            <x-slot:main>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolores quae autem quaerat earum veniam pariatur, at molestiae ipsum explicabo, ad corrupti placeat neque voluptate asperiores modi amet odio? Sit corrupti odio dolorum fugit totam obcaecati modi iure tenetur nesciunt officia illo, provident fuga sed iste nobis nihil! Eius, autem.
                    </p>
                </div>
            </x-slot:main>
            <x-slot:footer>
                <a class="btn-secondary">Secondary Button</a>
            </x-slot:footer>
        </x-card>

        <x-card class="flex-1">
            <x-slot:head>
                <h2>H2 Title</h2> 
            </x-slot:head>
            <x-slot:main>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolores quae autem quaerat earum veniam pariatur, at molestiae ipsum explicabo, ad corrupti placeat neque voluptate asperiores modi amet odio? Sit corrupti odio dolorum fugit totam obcaecati modi iure tenetur nesciunt officia illo, provident fuga sed iste nobis nihil! Eius, autem.
                    </p>
                </div>
            </x-slot:main>
            <x-slot:footer>
                <a class="btn-secondary">Secondary Button</a>
            </x-slot:footer>
        </x-card>

        <x-card class="flex-1">
            <x-slot:head>
                <h2>H2 Title</h2> 
            </x-slot:head>
            <x-slot:main>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolores quae autem quaerat earum veniam pariatur, at molestiae ipsum explicabo, ad corrupti placeat neque voluptate asperiores modi amet odio? Sit corrupti odio dolorum fugit totam obcaecati modi iure tenetur nesciunt officia illo, provident fuga sed iste nobis nihil! Eius, autem.
                    </p>
                </div>
            </x-slot:main>
            <x-slot:footer>
                <a class="btn-secondary">Secondary Button</a>
            </x-slot:footer>
        </x-card>
    </div>
</section>
{{-- Vuejs App --}}
@endsection