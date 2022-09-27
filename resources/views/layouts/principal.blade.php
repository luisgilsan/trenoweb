<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'RUBBER') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch"  type="image/x-icon" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        @yield('stylesPlugin')
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/estilos-float.css') }}" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}


        <style>

        .display-true{
            display: block !important;
        }

        .display-false{
            display: none !important;
        }

            .margin-content-atlas{
                padding-top: 0px !important;
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
            .font-tahoma {
                font-family: Tahoma, sans-serif;
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
                width: 100% !important;
                height: 14% !important;
            }

            .img-nav-atlas-res-1{
                height: 12% !important;
                width: 100% !important;
            }

            .img-truck-atlas{
                border-radius: 15px;
                /* background-color: #fcb603; */
                font-size: 180%;
                font-weight: bold;
                width: 55%;
                height: 40vh;
                background-color: transparent;
            }

            .img-hide-atlas{
                /* background-color: #fcb603; */
                width: 120px;
                background-color: transparent;
            }

            .button-float-atlas{
               color: #ffffff;
               width: 40%;
               background-color: #05bbaf;
               font-weight: bold;
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
                background-color: rgba(0, 77, 45, 0.99) !important;
                font-size: 13px;
                transition: font-size .5s;
            }

            .back_dos_nabvar{
                font-size: 12px;
            }

            .atlas-hide{
                display: none !important;
            }

            .size-one-img-atlas{
                width: 35%;
            }
            .size-two-img-atlas{
                width: 70% !important;
            }

            .tip-rounded-div{
                width:  0px;
                height:  0px;
                border-right: 40px solid transparent;
                border-left: 40px solid transparent;
                border-top: 30px solid #d57b41;
                margin: auto;
            }

    .rounded-div{
        width: 100%;
        height:  80px;
        background-color: #d57b41;
        margin: auto;
        border-radius: 12px 12px  0%  0%;
    }

    .rounded-div-contact{
        height:  160px !important;
    }

    .menu-div-atlas{
        background: #ffffff;
        border-radius: 12px 12px 12px 12px;
        margin-left: 0px !important;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
        color: #ff6b6f;
    }

    .subtitle-white-atlas{
        color:#ffffff;
        font-family: Tahoma, sans-serif;
        font-size: 20px;
    }

    .subtitle-blue-atlas{
        color:#05bbaf;
        font-family: Tahoma, sans-serif;
        font-size: 20px;
    }

    .subtitle-black-atlas{
        color:#000;
        font-family: Tahoma, sans-serif;
        font-size: 20px;
    }

    .menu-white-atlas{
        color:#ffffff !important;
        font-weight: bold !important;
        font-family: 'Century Gothic' !important;
        font-size: 30px !important;
    }

    .img-menu-atlas{
        width: 150px;
        margin-top: -70px;
    }

    .paragraph-white-atlas{
        color:#ffffff;
        font-family: Tahoma, sans-serif;
        font-size: 22px;
    }

    .paragraph-black-atlas{
        color:#000;
        font-family: Tahoma, sans-serif;
        font-size: 22px;
    }

    .border-img{
        /* border-radius: 10px 10px 10px 10px !important;
        border-width: 2px !important;
        border-style: solid !important;
        border-color: #009898 !important; */
    }

    .carousel-indicators > li {
    border-radius: 50% !important;
    }   

    .products-button-top{
        margin-top:40% !important;
    }

        </style>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Scripts -->
        <script src="{{ asset('js/jquery-331.js') }}" ></script>
        <script src="{{ asset('js/bootstrap413.js') }}" defer></script>

        <!-- JavaScript -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> --}}


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
                <a alt="img-what" href="https://wa.link/zqkvoz" target="_blank"><img class="icon-what"
                    src="{{ asset('images/atlas-whatsapp.png') }}" alt="img-what" /></a>
            </div>
        </div>
        <div class="container-facebook" >
            <div>
                <a alt="img-what" href="https://www.facebook.com/Rubber-Granulta-sas-100263915411593" target="_blank"><img class="icon-facebook"
                    src="{{ asset('images/LogoFacebook.png') }}" alt="img-what" /></a>
            </div>
        </div>
        <div class="container-instagram" >
            <div>
                <a alt="img-what" href="https://www.instagram.com/rubber_granulate_s.a.s/?igshid=14nt9rmlcckny" target="_blank"><img class="icon-instagram"
                    src="{{ asset('images/LogoInstagram.png') }}" alt="img-what" /></a>
            </div>
        </div>
        
        @include('cookieConsent::index')
        <div class="body-atlas">
            <div class="fixed-top">
                <nav class="navbar navbar-expand-lg back_uno_nabvar " id="menu">
                    <!-- Actual search box -->
                    <div class="container-fluid">
                        <a class="size-one-img-atlas" id="logo-size"  href="{{ url('/') }}">
                            <img id="nav-img" style="width: 100% !important;" src=" {{ asset('images/rubber_nav.png') }}" alt="Imagen">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                             <a style="color:#ffffff !important;">
                                <i class="fa fa-list"> </i>
                            </a>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">  
                            </ul>
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item" >
                                    <a class="nav-link font-nav-atlas"  href="{{ url('/') }}">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-nav-atlas" href="{{ url('/aboutus') }}">Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-nav-atlas" href="{{ url('/productslist') }}">Productos</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link font-nav-atlas" href="{{ url('/apps') }}">Aplicaciones</a>
                                </li>
                                @can('roles.index')
                                <li class="nav-item">
                                    <a class="nav-link font-nav-atlas" href="{{ route('customer_requests.index') }}">Solicitudes</a>
                                </li>
                                @endcan
                                <li class="nav-item">
                                    <a class="nav-link font-nav-atlas" href="{{ url('/obras') }}">Obras</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-nav-atlas" href="#portfolio">Contacto</a>
                                </li>
                                {{-- @guest
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
                                @endguest --}}
                            </ul>
                        </div>
                    </div>
                </nav>

                

                <script type="text/javascript">
                        var win = $(this);  
                        console.log(win.width());
                        if (win.width() >= 800) { 
                            console.log('resstablece'); 
                            document.getElementById("logo-size").classList.add("size-one-img-atlas");
                            // document.getElementById("nav-img").classList.remove("img-nav-atlas-res-1");
                            document.getElementById("logo-size").classList.remove("size-two-img-atlas");
                            }
                        if (win.width() < 800) { 
                            console.log('logo change');
                            document.getElementById("logo-size").classList.remove("size-one-img-atlas");
                            // document.getElementById("nav-img").classList.add("img-nav-atlas-res-1"); 
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
                            document.getElementById("logo-size").classList.add("size-one-img-atlas");
                            document.getElementById("logo-size").classList.remove("size-two-img-atlas");
                            // document.getElementById("nav-img").classList.remove("img-nav-atlas-res-1");
                            
                            }
                        if (win.width() < 800) { 
                            console.log('logo change');
                            document.getElementById("logo-size").classList.remove("size-one-img-atlas");
                            document.getElementById("logo-size").classList.add("size-two-img-atlas");
                            // document.getElementById("nav-img").classList.add("img-nav-atlas-res-1");
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
            </div>
        </div>
        <!-- Grid column --> 
        </div>
        <div>
            <div class="footer-copyright text-center text-white py-3">© 2020 Copyright:
                <a href="https://mdbootstrap.com/">rubbergranulate.com.co</a>
            </div>
        </div>
    </footer>
</html>
