<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        {{-- csrf token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,700&display=swap');
         </style>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    
    </head>
    <body>
        <section id="app-layout">
            @include('includes.side-menu')
            <div class="welcome-jumbo">
                <div class="status">NEW</div>
                    <h1>Billy Burger</h1>
                <img src="/img/hamburger.png" class="burger-fries">
            </div>
        </section>
        @yield('content')
    </body>
</html>
