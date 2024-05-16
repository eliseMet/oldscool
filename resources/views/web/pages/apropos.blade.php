@extends('web.layouts.default')


@section('title', "Inscription")
@section('favicon')
    <link rel="icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
@endsection
@section('meta-description', "En général, les balises meta description informent les internautes et éveillent leur intérêt avec un résumé court et pertinent de la page. Elles constituent une sorte d'argumentaire destiné à convaincre l'internaute que la page correspond exactement à sa recherche.")


@section('content')

<section>
    <div class="m-l p-4">
        <p class="text-2xl text-tl-2"> A propos de OLD'S COOL</p>
    </div>
    <div class="corps m-l p-16 flex flex-col gap-2">
        <p>
            Nous sommes 4 étudiants de l’ESIR (Ecole Supérieure d’Ingénieur de Rennes) qui dans le cadre de notre cursus avons choisi de travailler sur un projet d’innovation sociétal sur le thème de la transition générationnelle.<br><br>
        </p>

        <p>
La <span class="color-blue">transition générationnelle</span>, dans notre société, fait référence au processus par lequel une génération plus âgée cède progressivement la place à une génération plus jeune au sein de divers domaines de la vie sociale, économique, politique, culturelle, et familiale. Cette transition implique un transfert de responsabilités, de pouvoir, de connaissances, de valeurs et de normes de comportement d'une génération à l'autre.<br><br>

        </p>

<p>
Cependant cette transition se fait de moins en moins communicative, nous pouvons observer <span class="color-blue">une coupure</span> entre les générations notamment entre la « génération Z », c’est-à-dire les personnes nées entre 1995 et 2010, et la génération des personnes nées entre 1950 et 1970. Les interactions sociales entre ces deux générations se font de plus en plus rares.<br><br>
</p>
<p>
Selon une étude de 2023, effectuée par « Les petits frères des pauvres » et intitulée « Isolement des personnes âgées et liens entre générations », 25% des personnes âgées voient moins leurs enfants et leurs petits-enfants qu’auparavant et plus de 50% des jeunes (18-30 ans) voient moins leurs grands-parents qu’auparavant. Ce constat s’aggrave avec le grand âge : 23 % des 85 ans et plus voient moins leurs enfants qu’avant et 36 % des 80-84 ans (et 43 % des plus de 85 ans) voient moins leurs petits-enfants qu’avant.<br><br>
</p>
<p>
Alors que des <span class="color-blue">rapports intergénérationnels</span>, basés sur une relation de confiance et de respect, sont évidemment bénéfiques pour les deux parties. Tout d’abord, pour les <span class="color-blue">personnes âgées</span>, c’est l’occasion de transmettre leur savoir-faire, de raconter leurs souvenirs de vie, ou encore de leur donner le goût à des activités. Ils peuvent ainsi transmettre des valeurs à leurs pairs, comme le respect, le sens de la famille, l’honnêteté ou encore la tolérance. Les <span class="color-blue">jeunes</span> apprécient quant à eux tout particulièrement le temps que leurs aînés leur accordent, pour apprendre de nouvelles choses ou encore pour passer un bon moment et tisser des liens avec quelqu’un qui n’est pas du même milieu.<br><br>
</p>
<p>
Suite à ce constat nous avons réfléchi à une solution pour resserrer les liens intergénérationnels et aider les personnes qui se sentent seules à trouver de la compagnie. C’est donc comme cela que le projet <span class="color-blue">Old’s cool</span> est né.<br>

        </p>
    </div>
</section>

@endsection