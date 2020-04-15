<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Treno') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @yield('stylesPlugin')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .navbar-treno {
            color: #00b0ff;
            /* background-color: #00b0ff; */
            background-color: rgba(0, 176, 255, 1);
            transition: background-color .5s;
        }

        .navbar-treno:hover {
            color: #00b0ff;
            /* background-color: #00b0ff; */
            background-color: rgba(0, 176, 255, 0.8);
        }

        .footer-treno {
            color: #ffffff;
            /* background-color: #00b0ff; */
            background-color: rgba(33, 33, 33, 1);
        }

        html, body {
                background-color: #303030;
                color: #000;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
        }

        .card-treno {
            background-color: #e6e6e6; 
            border-color:#00b0ff; 
            border-width: 3px;
        }
        .primary-treno{
            color:#00b0ff;
        }

        .font-bold-treno{
            font-weight: bold;
        }

        .logo-nav-treno{
            
            width: 50%;
            /* height: 10%; */
            /* background-color: #ff00ff; */
        }

        .bg-treno {
            /* The image used */
            background-image: url("{{ asset('images/espalda.jpg') }}");
            /* Full height */
            height: 100%;
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }

        .logo-nav-brand-treno{
            /* width: 40%;
            height: 10%; */
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-331.js') }}" ></script>
    <script src="{{ asset('js/bootstrap413.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap-fileinput//js/plugins/piexif.js')}}" type="text/javascript"></script>  
    <script src="{{ asset('js/bootstrap-fileinput/js/plugins/sortable.js')}}" type="text/javascript"></script> 
    <script src="{{ asset('js/bootstrap-fileinput/js/fileinput.js')}}" type="text/javascript"></script> 
    <script src="{{ asset('js/bootstrap-fileinput/js/locales/fr.js')}}" type="text/javascript"></script> 
    <script src="{{ asset('js/bootstrap-fileinput/js/locales/es.js')}}" type="text/javascript"></script> 
    <script src="{{ asset('js/bootstrap-fileinput/themes/fas/theme.js')}}" type="text/javascript"></script> 
    <script src="{{ asset('js/bootstrap-fileinput/themes/explorer-fas/theme.js')}}" type="text/javascript"></script> 
    @yield('scritpsPage')
    
</head>
<body class="bg-treno">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-treno shadow-sm">
            <div class="container">
                <a class="navbar-brand logo-nav-brand-treno" href="{{ url('/') }}">
                     <img class="logo-nav-treno" src="{{ asset('images/logofondoazul.svg') }}" >
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @can('products.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('products.index') }}">Productos</a>
                            </li>
                        @endcan
                        @can('products.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('catalog.index') }}">Catálogo</a>
                            </li>
                        @endcan
                        @can('roles.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('roles.index') }}" >Roles</a>
                            <li>
                        @endcan
                        @can('roles.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}" >Usuarios</a>
                            </li>
                        @endcan
                        @can('roles.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('assessments.index') }}" >Valoraciones</a>
                            </li>
                        @endcan

                        @can('roles.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('assessments.index') }}" >Valoraciones (No FORMS)</a>
                            </li>
                        @endcan

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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

        @if(session('info'))
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                                    
                    <div class="alert alert-success">
                        {{ session('info') }}
                    </div>
                </div>
            </div>
        </div>
        @endif

        <main class="py-4">
            @yield('content')
        </main>
    </div>  

    @yield('extraScritps')

    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4 footer-treno">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
    
            <!-- Grid row -->
            <div class="row">
        
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
                    <img src="{{ asset('images/stores.png') }}" class="rounded mx-auto d-block" style="width:20%" >
                </div>
                <!-- Grid column -->
        
        
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <img src="{{ asset('images/facebook.png') }}" class="rounded mx-auto d-block" style="width:20%" >
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <a href="https://mdbootstrap.com/education/bootstrap/">
                        <img src="{{ asset('images/instagram.png') }}" class="rounded mx-auto d-block" style="width:20%" >
                    </a>    
                </div>
                <!-- Grid column -->
        
            </div>
            <!-- Grid row -->
    
        </div>
        <!-- Footer Links -->
    
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> treno.com.co</a>
        </div>
        <!-- Copyright -->
    
    </footer>
    <!-- Footer -->
    




</body>
</html>
