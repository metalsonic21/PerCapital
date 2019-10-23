<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&amp;subset=latin-ext,vietnamese"
        rel=stylesheet>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel=stylesheet>

    <script src="{{ asset('js/app.js') }}" defer></script>


    <title>Per Capital @yield('title')</title>
</head>
<body>
    <div id="app">
        <disclaimer></disclaimer>
        <navigation></navigation>
        <slider></slider>
        <landing></landing>
        <footeralt></footeralt>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" defer></script>
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