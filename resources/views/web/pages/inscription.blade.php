@extends('web.layouts.default')


@section('title', "Inscription")
@section('favicon')
    <link rel="icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
@endsection
@section('meta-description', "En général, les balises meta description informent les internautes et éveillent leur intérêt avec un résumé court et pertinent de la page. Elles constituent une sorte d'argumentaire destiné à convaincre l'internaute que la page correspond exactement à sa recherche.")


@section('content')




<section>
    <div class="card-form">
        <h1>Inscription</h1>
        <div class="">
            <form class="" method="POST" action="{{route('user.store')}}">
                @csrf
                @method("POST")

                {{-- Pseudo --}}
                <x-form.formgroup id="pseudo" label="Pseudo :" :error="$errors->first('pseudo')">
                    <x-form.input-text name="pseudo" :value="old('pseudo')" />                    
                </x-form.formgroup>

                {{-- Firstname --}}
                <x-form.formgroup id="firstname" label="Prénom :" :error="$errors->first('firstname')">
                    {{-- slot --}}
                    <x-form.input-text name="firstname" :value="old('firstname')" />                    
                </x-form.formgroup>

                {{-- Lastname --}}
                <x-form.formgroup id="lastname" label="Nom :" :error="$errors->first('lastname')">
                    <x-form.input-text name="lastname" :value="old('lastname')"/>                    
                </x-form.formgroup>

                {{-- Image --}}
                <x-form.formgroup id="image_id" label="Avatar :" :error="$errors->first('image_id')">
                    <div id="profile-picture-select-component">
                        <profile-picture-select-component/>
                    </div>
                </x-form.formgroup>

                {{-- Email --}}
                <x-form.formgroup id="email" label="Adresse mail :" :error="$errors->first('email')">
                    <x-form.input-text name="email" :value="old('email')"/>                    
                </x-form.formgroup>

                {{-- Birthday --}}
                <x-form.formgroup id="birthday" label="Date de naissance :" :error="$errors->first('birthday')">
                    <x-form.input-text name="birthday" type="date" :value="old('birthday')"/>                    
                </x-form.formgroup>

                {{-- Phone Number --}}
                <x-form.formgroup id="phone_number" label="Téléphone :" :error="$errors->first('phone_number')">
                    <x-form.input-text name="phone_number" pattern="^(06|07|02)[0-9]{8}$" :value="old('phone_number')"/>                    
                </x-form.formgroup>

                {{-- Password --}}
                <x-form.formgroup id="password" label="Mot de passe :" :error="$errors->first('password')">
                    <x-form.input-text name="password" type="password" />                    
                </x-form.formgroup>

                {{-- Confirm password --}}
                <x-form.formgroup id="password_confirmation" label="Confirmez votre mot de passe :" :error="$errors->first('password_confirmation')">
                    <x-form.input-text name="password_confirmation" type="password"/>                    
                </x-form.formgroup>

                <input type="submit" value="Créer un compte">
            </form>
        </div>
        <p class="text-discret" style="text-align: center; font-size: 10px;">
            En devenant membre, vous acceptez nos <a href="{{ url('/ConditionsUtilisation') }}">Conditions d'utilisation</a> et notre <a href="{{ url('/PolitiqueConfidentialite') }}">Politique de confidentialité</a>
        </p>
    </div>
</section>


{{-- Vuejs App --}}
@endsection