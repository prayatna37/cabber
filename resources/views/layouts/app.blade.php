<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::to('assets/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/css/nice-select.css')}}">							
    <link rel="stylesheet" href="{{URL::to('assets/css/animate.min.css.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/css/jquery-ui.css')}}">			
    <link rel="stylesheet" href="{{URL::to('assets/css/main.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">                        
                        
                    </ul>
                    
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="font-size: 16px;">                        
                        <li class="nav-item"><a href="service.html" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="service.html" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="{{route('drivers.show')}}" class="nav-link">Drivers</a></li>
                        
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
                            @if (Auth::user()->is_driver==true)
                                <li class="nav-item"><a href="{{route('booking.active')}}" class="nav-link">Active Bookings</a></li>
                            @else
                                <li class="nav-item"><a href="{{route('booking.show', Auth::user()->id)}}" class="nav-link">Booking</a></li>
                            @endif
                            
                            <li class="nav-item">
                                <a href="{{route('profile.show', Auth::user()->id)}}" class="nav-link">Profile</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        @include('layouts.footer')
    </div>
    <script src="{{URL::to('assets/js/custom.js')}}"></script>
    <script src="{{URL::to('assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    {{-- <script src="{{URL::to('assets/js/vendor/bootstrap.min.js')}}"></script>			 --}}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{URL::to('assets/js/easing.min.js')}}"></script>			
    <script src="{{URL::to('assets/js/hoverIntent.js')}}"></script>
    <script src="{{URL::to('assets/js/superfish.min.js')}}"></script>	
    <script src="{{URL::to('assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{URL::to('assets/js/jquery.magnific-popup.min.js')}}"></script>	
    <script src="{{URL::to('assets/js/jquery-ui.js')}}"></script>								
    <script src="{{URL::to('assets/js/jquery.nice-select.min.js')}}"></script>							
    <script src="{{URL::to('assets/js/mail-script.js')}}"></script>	
    <script src="{{URL::to('assets/js/main.js')}}"></script>	
</body>
</html>
