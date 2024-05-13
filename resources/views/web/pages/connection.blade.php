@extends('web.layouts.default')


@section('title', "Inscription")
@section('favicon')
    <link rel="icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
@endsection
@section('meta-description', "En général, les balises meta description informent les internautes et éveillent leur intérêt avec un résumé court et pertinent de la page. Elles constituent une sorte d'argumentaire destiné à convaincre l'internaute que la page correspond exactement à sa recherche.")


@section('content')

<section>
    <div class="card card-form">
        <h1 class="text-2xl">Connexion</h1>
        <form class="flex flex-col gap-4" method="POST" action="{{route('user.authenticate')}}">
            @csrf

            @method("POST")

            <div>
                {{-- Email --}}
                 <x-form.formgroup id="email" label="Adresse mail :" :error="$errors->first('email')">
                     <x-form.input-text name="email" :value="old('email')"/>                    
                 </x-form.formgroup>
     
                 {{-- Password --}}
                 <x-form.formgroup id="password" label="Mot de passe :" :error="$errors->first('password')">
                     <x-form.input-text name="password" type="password" />                    
                 </x-form.formgroup>
            </div>

            <input type="submit" value="Se connecter">
        </form>
    </div>
</section>

{{-- Vuejs App --}}
@endsection