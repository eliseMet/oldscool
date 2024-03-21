<header class="header">
    <ul class="header-left">
        <li class="header-item">
            <a href="#" class="header-link">
                <picture>
                    <source srcset="{{asset('img/web/LOGO.webp')}}">
                    <img src="{{asset('img/web/LOGO.png')}}" alt="Logo Olds cool" class="header-logo" width="60" height="60">
                </picture>
            </a>
        </li>
        <li><img src="{{asset('img/web/typo-black.png')}}" alt="typo Olds cool" class="header-logo" width="200" height="50"></li>
    </ul>
    <ul class="header-right">
        @guest
            <li class="header-item"><a href="{{route('user.registration')}}" class="header-link btn-primary">S'inscrire</a></li>
            <li class="header-item"><a href="{{route('user.connection')}}" class="header-link"><strong>Connexion</strong></a></li>
        @endguest

        @auth
            <li class="header-item"><a href="{{route('user.logout')}}" class="header-link btn-primary">Deconnexion</a></li>
        @endauth
    </ul>
</header>

 
