<header class="header">
    <div class="header-container">
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
                <li>
                    <x-dropdown id="profile">
                        <x-slot:label>
                            <div class="header-profile">
                                <img class="header-pp" src="/image/{{auth()->user()->profileImage->url}}" alt="{{auth()->user()->profileImage->alt}}">
                                <span>
                                    {{ auth()->user()->firstname }} {{ auth()->user()->lastname }}
                                </span>
                            </div>
                        </x-slot:label>
                        <x-slot:content>
                            <ul class="header-dropdown-menu">
                                <li class="header-dropdown-item">
                                    <a class="header-dropdown-link" href="{{route('user.edit')}}">Mon Profil</a>
                                </li>
                                <li class="header-dropdown-item">
                                    <a class="header-dropdown-link" href="{{route('user.logout')}}">Deconnexion</a>
                                </li>
                            </ul>
                        </x-slot:content>
                    </x-dropdown>
                </li>
                {{-- <li class="header-item">
                    <a href="{{route('user.logout')}}" class="header-link btn-primary">Deconnexion</a>
                </li> --}}
            @endauth
        </ul>
    </div>
</header>

 
