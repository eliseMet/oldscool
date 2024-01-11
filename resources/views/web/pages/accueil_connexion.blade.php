

<head>
    <title>Connecté</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('images/logoICON/logoCercle1.ico') }}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <header class="header">
        <div class="header-logo">
            <img class="logo" src="{{ asset('images/logoPNG/logoCercle1.png') }}" alt="Mon logo">
            <a class="btn-main" href="{{ url('/pagePrincipale') }}">old's cool</a>
        </div>
        <ul class="header-nav">
            <li class="header-item"><a href="#" class="header-link"><strong> Contact </strong></a></li>
            <li class="header-item"><a href="#" class="header-link"><strong> A propos</strong></a></li>
            <li class="header-item"><a href="#" class="header-link"><strong> Aide </strong></a></li>
        </ul>
    </header>

    <main>
        <div class="hero">
            <img class="hero-img filter-grey" src="{{ asset('images/imageDeFond3.jpeg') }}" alt="Mon fond">
            <div class="hero-content">
                <h2 class="text-russo hero-title" style="text-align: center;">2 Générations, 1 Moment</h2>
                <p class="hero-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam consequatur quam natus similique! Voluptatem architecto fugit corrupti sint in laboriosam nihil reiciendis molestiae perferendis? Odio modi molestias non molestiae ipsa?</p>
            </div>
        </div>
        <a class="btn-primary btn-home" href="{{ url('/activites') }}">Consulter les propositions d'activités</a>
        <a class="btn-primary btn-home" href="{{ url('/profil') }}">Profil</a>
    </main>
</body>
