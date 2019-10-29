<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Per Capital</title>

        <link rel="shortcut icon" href="{{ asset('img/logo/Simbolo-Per-Capital-blanco.png') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset('/css/icons.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/swiper.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/swiper-slider.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/default.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">


        <script src="{{ asset('js/app.js') }}" defer></script>

       
    </head>
    <body>
        <div id="app">
            <app></app>
        </div>

        <script src="{{ asset('js/jquery.min.js') }}" defer></script>
        <script src="{{ asset('js/swiper.min.js') }}" defer></script>
        <script src="{{ asset('js/owl.carousel.js') }}" defer></script>
        <script src="{{ asset('js/wow.min.js') }}" defer></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}" defer></script>
        <script src="{{ asset('js/isotope.pkgd.min.js') }}" defer></script>
        <script src="{{ asset('js/tabs.min.js') }}" defer></script>
        <script src="{{ asset('js/typed.js') }}" defer></script>
        <script src="{{ asset('js/modernizr.js') }}" defer></script>
        <script src="{{ asset('js/main.js') }}" defer></script>

    </body>

    
</html>
