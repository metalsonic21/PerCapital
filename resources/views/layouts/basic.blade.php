<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Per Capital</title>

    <!-- Scripts -->
    <script type="application/javascript" src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('img/logo/Simbolo-Per-Capital-blanco.png') }}">
    <title>Per Capital</title>

    <!-- Bootstrap CDN -->


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('/css/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/swiper-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/default.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <Values></Values>
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img/logo/PastedGraphic-1-3.jpeg" width="220" height="110" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">La empresa</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Fondos</a>
                        </li> 

                        <li class="nav-item">
                            <a href="{{ url('/services') }}" class="nav-link">Servicios</a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">Reportes y noticias</a>
                        </li>

                        <li>
                            <a href="" class="nav-link">Contacto</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#languages" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Idioma
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="languages">
                                      <a class="dropdown-item" href="#">Inglés</a>
                                      <a class="dropdown-item" href="#">Español</a>

                                    </div>
                                  </li>

                            
                                  <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#inversionist" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Inversionista
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="inversionist">
                                          <a class="dropdown-item" href="#">Institucional</a>
                                          <a class="dropdown-item" href="#">Privado</a>
    
                                        </div>
                                      </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        
                        
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#userinfo" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="userinfo">

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                    </form>
                                </div>
                              </li>
                              @endguest

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" defer></script>
        <script type="application/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" defer></script>

        <script type="application/javascript" src="{{ asset('js/jquery.min.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/tabs.min.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/modernizr.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/main.js') }}" defer></script>
    </div>
</body>
</html>
