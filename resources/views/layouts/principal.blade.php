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
        <link href="{{ asset('css/estilos-float.css') }}" rel="stylesheet">

        <style>

            .margin-content-atlas{
                padding-top: 68px !important;
            }   

            .margin-subview-atlas{
                padding-top: 30px !important;
            }  

            .navbar-treno {
                color: #00b0ff;
                /* background-color: #00b0ff; */
                background-color: rgba(0, 0, 0, 0.7);
                /* rgb(144, 99, 138) */
                transition: background-color .5s;
            }

            .navbar-treno:hover {
                color: #00b0ff;
                /* background-color: #00b0ff; */
                background-color: rgba(0, 0, 0, 1);
            }

            .floating-div-atlas-hide{
                /* background-color: transparent; */
                background-color: #00ff00;
                width: 36%;
                margin-top: 20vh;
                height: 10vh;
                /* float: left !important;
                clear: left !important; */
                /* display: inline-block !important; */
            }

            .purple-backgroung{
                background-color: rgba(167, 75, 165,1) !important;
            }

            .footer-treno {
                color: #ffffff;
                /* background-color: #00b0ff; */
                background-color: rgba(33, 33, 33, 1);
            }

            .font-nav-atlas{
                color: #ffffff !important;
                font-size: 140% !important;
                transition: color .5s;
            }

            .font-nav-atlas:hover {
                color: #fcb603 !important;
            }

            .basic-colot-atlas {
                color: #fcb603 !important;
            }

            .div-nav-atlas{
                /* margin-left: 4%; */
                /* padding-left: 4%; */
                
                background-color: #fcb603 !important;
                color: #ffffff;
                /* font-size: 120% !important; */
                width: 80%;
                transition: color .5s;
                margin-left: 10%;
            }

            .font-nav-atlas:hover {
                color: #fcb603 !important;
            }
        
            .card-treno {
                /* background-color: #b38e8e;  */
                /* border-color: rgba(167, 75, 165,.7); */
                /* border-width: 3px; */
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

            /* .bg-treno {
                /* The image used */
                background-image: url("{{ asset('images/excavators.jpg') }}");
                /* Full height */
                height: 100%;
                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                } */

            .logo-nav-brand-treno{
                margin-left: 0px;
                background-color: #00b0ff;
                /* width: 20%; */
                font-size: 160%;
                transform: skew(40deg);
                /* height: 10%; */
                /* width: 60%; */
                
            }

            html {
                min-height: 100% !important;
                position: relative !important;
            }
        
            
            body {
                display: flex !important;
                min-height: 100vh !important;
                flex-direction: column !important;
            }

            .body-atlas {
                display: flex !important;
                min-height: 100vh !important;
                flex-direction: column !important;
            }

            .main {
                flex: 1 !important;
            }

            .footer {
                background-color: rgba(0, 0, 0, 0.8) !important;
                width: 100% !important;
                min-height: 10px !important;
            }

            /* Bootstrap 4 text input with search icon */

            .has-search .form-control {
                padding-left: 2.375rem;
            }

            .has-search .form-control-feedback {
                position: absolute;
                z-index: 2;
                display: block;
                width: 2.375rem;
                height: 2.375rem;
                line-height: 2.375rem;
                text-align: center;
                pointer-events: none;
                color: #aaa;
            }
            
            .button-ppal-atlas{
                border-radius: 15px;
                /* background-color: #fcb603; */
                color: #fcb603;
                font-size: 120%;
            }

            .top-font-atlas{
                border-radius: 15px;
                /* background-color: #fcb603; */
                color: #fcb603;
                font-size: 180%;
                font-weight: bold;
                background-color: transparent;
            }

            .img-nav-atlas{
                border-radius: 15px;
                /* background-color: #fcb603; */
                font-weight: bold;
                width: 100%;
                height: 14%;
                background-color: transparent;
            }

            .img-nav-atlas-res-1{
                height: 12% !important;
            }

            .img-truck-atlas{
                border-radius: 15px;
                /* background-color: #fcb603; */
                font-size: 180%;
                font-weight: bold;
                width: 80%;
                height: 40vh;
                background-color: transparent;
            }

            .img-hide-atlas{
                /* background-color: #fcb603; */
               
                background-color: transparent;
            }

            .button-float-atlas{
               color: #ffffff;
               margin-left: 20%;
               width: 40%;
               background-color: rgb(0, 152, 168);
               font-size: 2.5vh;
            }

            .button-view-atlas{
               color: #ffffff;
               margin-left: 20%;
               width: 10%;
               background-color: rgb(57, 128, 160);
               font-size: 2.5vh;
            }

            .text-floating-atlas{
                color: #ffffff;
                font-size: 2.5vh;
            }

            .button-quotation-atlas{
                border-radius: 15px;
                background-color: #fcb603;
                color: #ffffff;
            }

            .color-text_atlas{
                color: #009898 !important;
            }

            .nav-backgroud-standard-black{
                background-color: #2f494a;
            }

            .back_uno_nabvar{
                background-color: rgba(0, 0, 0, 0.85) !important;
                font-size: 12px;
                transition: font-size .5s;
            }

            .back_dos_nabvar{
                font-size: 10px;
            }

            .atlas-hide{
                display: none !important;
            }

            .size-one-img-atlas{
                width: 40%;
            }
            .size-two-img-atlas{
                width: 70% !important;
            }

        </style>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
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
        
        <script type="text/javascript">
            $(window).scroll(function() {
                if ($("#menu").offset().top > 56) {
                    $("#menu").addClass("back_dos_nabvar");
                } else {
                    $("#menu").removeClass("back_dos_nabvar");
                }
            });
        </script>
        
        @yield('scritpsPage')
        
    </head>
    <body>
        <div class="container-whatsapp" >
            <div>
                <a alt="img-what" href="https://www.google.com/" target="_blank"><img class="icon-what"
                    src="{{ asset('images/atlas-whatsapp.png') }}" alt="img-what" /></a>
            </div>
        </div>
        <div class="container-show-menu" id="hideshow"  >
            <div id="content">
                <button style="background: transparent; border: none;">
                    <img class="icon-show-menu" src="{{ asset('images/show-menu.png') }}" alt="img-what" />
                </button>
            </div>
        </div>

        <div class="floating-div-atlas" id="content2">
            <div class="container-fluid text-center">
                <img class="img-truck-atlas" src=" {{  
                    asset('images/img_tractor_atlas.png') }}" 
                    alt="Imagen" class="img-fluid img-thumbnail">
            </div>
            <div class="container-fluid text-floating-atlas text-center">
                <div style="width:80%; margin-left:10%">
                    <p class="text-justify" >
                        Contamos con la experiencia de mas de 15 años en el mercado y ademas 
                        de nuestro servicio personalizado el ahorro de dinero en sus órdenes de
                        compra es otro de nuestros beneficiosasasa.  
                    </p>
                </div>
            </div>
            <a href="#portfolio">
                <button class="btn button-float-atlas"> Cotiza con nosotros</button>
            </a>
            <br/>

            <div class="container-fluid text-center">
                <button id="hideshow2" class="btn" style="width: 30px; height: 10px; margin-top:-30px; margin-left:60%">
                    <img class="img-hide-atlas" src=" {{  
                        asset('images/hide_menu.png') }}" 
                        alt="Imagen" class="img-fluid img-thumbnail">
                </button>
            </div>   
        </div>

        @include('cookieConsent::index')
        <div class="body-atlas">
            <div class="fixed-top">
            {{-- <nav class="navbar navbar-expand-lg navbar-dark navbar-treno  fixed-top"> --}}
                <nav class="navbar navbar-expand-lg navbar-dark back_uno_nabvar " id="menu">
                    <!-- Actual search box -->
                    <div class="container-fluid">
                        <a class="size-one-img-atlas" id="logo-size"  href="{{ url('/') }}">
                            <img class="img-nav-atlas" id="nav-img" src=" {{  
                                asset('images/atlas_nav.png') }}" alt="Imagen">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">  
                            </ul>
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link font-nav-atlas" href="#initpage">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-nav-atlas" href="#aboutus">Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-nav-atlas" href="#products">Productos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-nav-atlas" href="#services">Servicios</a>
                                </li>
                                @can('roles.index')
                                <li class="nav-item">
                                    <a class="nav-link font-nav-atlas" href="{{ route('customer_requests.index') }}">Solicitudes</a>
                                </li>
                                @endcan
                                <li class="nav-item">
                                    <a class="nav-link font-nav-atlas" href="#portfolio">Cotiza</a>
                                </li>
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link font-nav-atlas" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @else
                                    <li class="nav-item dropdown font-nav-atlas">
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

                

                <script type="text/javascript">
                        var win = $(this);  
                        console.log(win.width());
                        if (win.width() >= 800) { 
                            console.log('resstablece'); 
                            document.getElementById("nav-img").classList.remove("img-nav-atlas-res-1");
                            document.getElementById("logo-size").classList.remove("size-two-img-atlas");
                            }
                        if (win.width() < 800) { 
                            console.log('logo change');
                            document.getElementById("nav-img").classList.add("img-nav-atlas-res-1"); 
                            document.getElementById("logo-size").classList.add("size-two-img-atlas");   
                        }
                        if (win.width() >=850) { 
                            document.getElementById("content2").classList.remove("atlas-hide");
                            document.getElementById("content").classList.remove("atlas-hide");
                            }
                        if (win.width() < 850) { 
                            document.getElementById("content2").classList.add("atlas-hide");
                            document.getElementById("content").classList.add("atlas-hide");   
                        }

                    console.log('loading div hide');
                    jQuery(document).ready(function(){
                        jQuery('#content').toggle('show');
                       jQuery('#hideshow').on('click', function(event) {        
                           jQuery('#content').toggle('show');
                           jQuery('#content2').toggle('show');
                           console.log('escondiendo');
                       });
                       jQuery('#hideshow2').on('click', function(event) {        
                           jQuery('#content').toggle('show');
                           jQuery('#content2').toggle('show');
                           console.log('escondiendo');
                       });
                    });

                    $(window).on('resize', function(){
                        var win = $(this); //this = window
                        console.log(win.width());
                        // Condicionales Tamaño Nav
                        if (win.width() >= 800) { 
                            console.log('resstablece'); 
                            document.getElementById("logo-size").classList.remove("size-two-img-atlas");
                            document.getElementById("nav-img").classList.remove("img-nav-atlas-res-1");
                            
                            }
                        if (win.width() < 800) { 
                            console.log('logo change');
                            document.getElementById("logo-size").classList.add("size-two-img-atlas");
                            document.getElementById("nav-img").classList.add("img-nav-atlas-res-1");
                        }
                        // Condicionales Tamaño Nav
                        if (win.width() >=850) { 
                            document.getElementById("content2").classList.remove("atlas-hide");
                            document.getElementById("content").classList.remove("atlas-hide");
                            }
                        if (win.width() < 850) { 
                            document.getElementById("content2").classList.add("atlas-hide");
                            document.getElementById("content").classList.add("atlas-hide");   
                        }

                        
                    });
               </script>
            </div>

            {{-- <div class="fixed-top"> --}}

            
                {{-- <button id="hideshow" style="margin-top: 40vh; margin-left: 0vw;" class="btn button-view-atlas"> Ver</button> --}}
                
            {{-- </div> --}}

            {{-- <button id="hideshow" style="margin-top: 40vh; margin-left: 0vw;" class="btn button-view-atlas"> Ver</button> --}}

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

            

           

             

            

            <main class="margin-content-atlas" id="initpage">
                @yield('content')
            </main>
        </div>  

        

        @yield('extraScritps')
    </body>
    <div class="py-3">
    </div>
    <footer class="footer">
        <div class="container text-white">    
        <!-- Grid row-->
        <div class="row py-3">
            <div class="col-md-4 offset-md-4 text-center">
                <!-- Facebook -->
                <a class="fb-ic color-text_atlas">
                    <i class="fa fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <!-- Twitter -->
                <a class="tw-ic color-text_atlas">
                    <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <!--Instagram-->
                <a class="ins-ic color-text_atlas">
                    <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <!--Pinterest-->
                <a class="pin-ic color-text_atlas">
                    <i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
                </a>
            </div>
        </div>
        <!-- Grid column --> 
        </div>
        <div>
            <div class="footer-copyright text-center text-white py-3">© 2020 Copyright:
                <a href="https://mdbootstrap.com/"> atlas.com</a>
            </div>
        </div>
    </footer>
</html>
