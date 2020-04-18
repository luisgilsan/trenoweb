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
            background-color: rgba(144, 99, 138, .7);
            /* rgb(144, 99, 138) */
            transition: background-color .5s;
        }

        .navbar-treno:hover {
            color: #00b0ff;
            /* background-color: #00b0ff; */
            background-color: rgba(144, 99, 138, .4);
        }

        .purple-backgroung{
            background-color: rgba(167, 75, 165,1) !important;
        }

        .footer-treno {
            color: #ffffff;
            /* background-color: #00b0ff; */
            background-color: rgba(33, 33, 33, 1);
        }

       
        .card-treno {
            background-color: #e6e6e6; 
            border-color: rgba(167, 75, 165,.7);
            border-width: 3px;
        }
        .primary-treno{
            color:#00b0ff;
        }

        .font-bold-treno{
            font-weight: bold;
        }

        .logo-nav-treno{
            
            width: 15%;
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

        html {
            min-height: 100% !important;
            position: relative !important;
        }
        body {
            margin: 0 !important;
            margin-bottom: 100px !important;
        }
        footer {
            background-color: #90638a !important;
            position: absolute !important;
            bottom: 0 !important;
            width: 100% !important;
            height: 100px !important;
            color: black !important;
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
                     <img class="logo-nav-treno" src="{{ asset('images/valery.png') }}" >
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
    <footer>

      
        <!-- Grid row -->
        <div class="row" class="purple-backgroung">
        
            <!-- Grid column -->
            <div class="col-md-6  mt-3">
                <div class="container">
                    <div class="col-md-10">
                        <img src="{{ asset('images/stores.png') }}" class="rounded mx-auto d-block" style="width:20%" >
                    </div>
                </div>
            </div>
            <!-- Grid column -->
    
    
            <!-- Grid column -->
            <div class="col-md-3  mb-3">
                <img src="{{ asset('images/facebook.png') }}" class="rounded mx-auto d-block" style="width:20%" >
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-3  mb-3 mt-3">
                <div class="container">
                    <div class="col-md-10">
                        <a href="https://mdbootstrap.com/education/bootstrap/">
                            <img src="{{ asset('images/instagram.png') }}" class="rounded mx-auto d-block" style="width:20%" >
                        </a>    
                    </div>
                </div>
            </div>
            
    
        </div>
        <div class="row text-center purple-backgroung">
            <div class="col-md-12  mb-12">
                <p>© 2020 Copyright:
                <a href="https://mdbootstrap.com/education/bootstrap/"> treno.com.co</a>
                </p>
            </div>
        </div>

    
    </footer>
    <!-- Footer -->
    




</body>
</html>
