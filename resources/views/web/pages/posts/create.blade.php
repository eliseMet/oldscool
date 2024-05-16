@extends('web.layouts.default')


@section('title', "Déposer une activité")
@section('favicon')
    <link rel="icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
@endsection
@section('meta-description', "En général, les balises meta description informent les internautes et éveillent leur intérêt avec un résumé court et pertinent de la page. Elles constituent une sorte d'argumentaire destiné à convaincre l'internaute que la page correspond exactement à sa recherche.")


@section('content')




<section>
    <div class="card-form">
        <h1 class="text-2xl">Description de l'activité</h1>
        <form class="flex flex-col gap-4" method="POST" action="{{route('post.store')}}">
            @csrf
            @method("POST")

            <div>
                {{-- Activity --}}
                <x-form.formgroup id="activity" label="Activité :" :error="$errors->first('activity')">
                    <x-form.input-text name="activity" :value="old('activity')" />                    
                </x-form.formgroup>
                 {{-- Date --}}
                 <x-form.formgroup id="date" label="Date :" :error="$errors->first('date')">
                    <x-form.input-text name="date" type="date" :value="old('date')"/>                    
                </x-form.formgroup>
                {{-- Description --}}
                <x-form.formgroup id="description" label="Description :" :error="$errors->first('description')">
                    <x-form.input-text name="description" :value="old('description')" />                    
                </x-form.formgroup>
                {{-- Address --}}
                <x-form.formgroup id="address" label="Adresse :" :error="$errors->first('address')">
                    <x-form.input-text name="address" :value="old('address')" />                    
                </x-form.formgroup>
            </div>

            <div class="flex justify-center">
                <input class="btn-primary" type="submit" value="Déposer l'activité">
            </div>
        </form>
    </div>
</section>


{{-- Vuejs App --}}
@endsection