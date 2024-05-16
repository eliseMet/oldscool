@extends('web.layouts.default')


@section('title', "Déposer une activité")
@section('favicon')
    <link rel="icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('img\web\LOGO.ico') }}" type="image/x-icon"/>
@endsection
@section('meta-description', "En général, les balises meta description informent les internautes et éveillent leur intérêt avec un résumé court et pertinent de la page. Elles constituent une sorte d'argumentaire destiné à convaincre l'internaute que la page correspond exactement à sa recherche.")


@section('content')




<section>
    <div class="container">
        <h1 class="text-2xl text-tl-2">Activités disponibles :</h1>
        <div class="flex flex-col gap-4">
            @foreach ($posts as $post)
            <div class="card p-nt">
                <div class="flex justify-between items-center">
                    <h2 class="title-xl">{{$post->activity}}</h2>
                    <img src="/image/{{$post->user->profileImage->url}}" alt="" width="50" height="50">
                </div>
                <p class="text-medium">"{{$post->description}}"</p>
                <div class="flex gap-4">
                    <div class="flex items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.5C15 12.1569 13.6569 13.5 12 13.5C10.3431 13.5 9 12.1569 9 10.5C9 8.84315 10.3431 7.5 12 7.5C13.6569 7.5 15 8.84315 15 10.5Z" stroke="#0F172A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19.5 10.5C19.5 17.6421 12 21.75 12 21.75C12 21.75 4.5 17.6421 4.5 10.5C4.5 6.35786 7.85786 3 12 3C16.1421 3 19.5 6.35786 19.5 10.5Z" stroke="#0F172A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>{{$post->address}}</span>
                    </div>

                    <div class="flex items-center gap-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.75 1V3.25M15.25 1V3.25M1 16.75V5.5C1 4.25736 2.00736 3.25 3.25 3.25H16.75C17.9926 3.25 19 4.25736 19 5.5V16.75M1 16.75C1 17.9926 2.00736 19 3.25 19H16.75C17.9926 19 19 17.9926 19 16.75M1 16.75V9.25C1 8.00736 2.00736 7 3.25 7H16.75C17.9926 7 19 8.00736 19 9.25V16.75M10 10.75H10.0075V10.7575H10V10.75ZM10 13H10.0075V13.0075H10V13ZM10 15.25H10.0075V15.2575H10V15.25ZM7.75 13H7.7575V13.0075H7.75V13ZM7.75 15.25H7.7575V15.2575H7.75V15.25ZM5.5 13H5.5075V13.0075H5.5V13ZM5.5 15.25H5.5075V15.2575H5.5V15.25ZM12.25 10.75H12.2575V10.7575H12.25V10.75ZM12.25 13H12.2575V13.0075H12.25V13ZM12.25 15.25H12.2575V15.2575H12.25V15.25ZM14.5 10.75H14.5075V10.7575H14.5V10.75ZM14.5 13H14.5075V13.0075H14.5V13Z" stroke="#0F172A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>{{$post->date}}</span> 
                    </div>
                </div>
                <a href="#" class="btn-primary">Prendre rdv</a>
            </div>
            @endforeach

        </div>
    </div>
</section>


{{-- Vuejs App --}}
@endsection