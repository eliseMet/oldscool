<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- Meta --}}
        <title>Old's Cool - @yield('title')</title>
        <meta name="description" content="@yield('meta-description')" />

        {{-- Favicon --}}
        @yield('favicon')
        {{-- <link rel="icon" type="image/png" href="" /> --}}

        <!-- CSS/JS -->
        @vite(['resources/js/web/app.js', 'resources/scss/web/app.scss'])

        @yield('head')
    </head>
    <body>
        @include('web.partials.header')
        
        <main>
            @yield('content')
        </main>
        
        @include('web.partials.footer')
    </body>
</html>