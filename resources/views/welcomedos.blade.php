@extends('layouts.principal')


<style>
    .caption-rubber{
        background-color: rgba(0, 0, 0, 0.7) !important;  
        bottom: 42% !important;
        top: 50% !important;
        right: 0% !important;
        left: 65% !important;
        border-radius: 30px 0px 0px 30px; 
    }
</style>
    
<script>
    
</script>

@section('content')   

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/slider_6.jpg') }}" class="d-block w-100" alt="...">
            <img src="{{ asset('images/banner_uno.png') }}" class="d-block w-100"  alt="...">
            <div class="carousel-caption d-none d-md-block caption-rubber">
                <p class="paragraph-white-atlas">Nuestro caucho es un producto 100% reciclado.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/slider_4.jpg') }}" class="d-block w-100"  alt="...">
            <img src="{{ asset('images/banner_uno.png') }}" class="d-block w-100"  alt="...">
            <div class="carousel-caption d-none d-md-block caption-rubber" >
              <p class="paragraph-white-atlas">Nuestro caucho es un producto 100% reciclado.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/slider_5.jpg') }}" class="d-block w-100" alt="...">
            <img src="{{ asset('images/banner_uno.png') }}" class="d-block w-100"  alt="...">
            <div class="carousel-caption d-none d-md-block caption-rubber">
              <p class="paragraph-white-atlas">Nuestro caucho es un producto 100% reciclado.</p>
            </div>
          </div>
        </div>
        {{-- <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> --}}
    </div>
    <div>
        <br/>
        <div class="container-fluid" id="products">
            <div class="row">
                <div class="col-md-1 text-center"></div>
                <div class="col-md-10 text-center" style="font-family: Tahoma, sans-serif;font-size: 24px;">
                    <p>Somos una empresa joven con personal altamente calificado y experimentado en la producción, distribuciones e instalaciones de juegos y areas deportivas, todos nuestros proyectos son enfocados en la utilización de SBR para ser cada día más amables con el medio ambiente, empresa 100% colombiana.</p>
                </div>
                <div class="col-md-1 text-center"></div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center"> 
                    <div class="py-2">
                    </div>          
                    <img class="border-img" style="width: 300px;" src="{{ asset('images/01.jpg')}}">
                    <img class="border-img" style="width: 300px;" src="{{ asset('images/02.jpg')}}">
                    <img class="border-img" style="width: 300px;" src="{{ asset('images/03.jpg')}}">
                </div>
            </div> 
        </div>    
        <div class="py-3"></div>   
    </div>

   

    <script>
        var msg = '{{Session::get('alert')}}';
        console.log('Alerta');
         var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
    </script>

    {{-- <script>
        alert({{ session()->get('jsAlert') }});
    </script> --}}
    <div style="background-color: rgba(0, 77, 45, 0.99) !important;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center font-tahoma" id="services">
                    <p style="color: #ffffff; font-size:26px;">SERVICIOS</p>
                </div>
            </div>
        </div>
        <div class="container-fluid py-3 font-tahoma">
            <div class="row">
                <div class="col-md-6">
                    <ul class="subtitle-white-atlas text-left font-tahoma" style="margin-left:20px !important; margin-right:10px !important;">
                        <li>Instalaciones de césped sintético para canchas</li>
                        <li>Instalaciones de césped paisajismo</li>
                        <li>Instalación de pisó vaciado en Caucho SBR</li>
                        <li>Instalación de pisó vaciado en mezcla de Caucho EPDM y SBR</li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <ul class="subtitle-white-atlas text-left font-tahoma" style="margin-left:20px !important; margin-right:10px !important;">
                        <li>Instalación de juegos para Parques infantiles</li>
                        <li>Adecuación de canchas de voli-playa</li>
                        <li>Adecuación de señalización vial</li>
                        <li>Adecuación de campos deportivos bajó especificaciones</li>
                    </ul>
                </div>
                <div class="container py-1"></div>
            </div>
        </div>
    </div>

    <div>
        <div class="container" id="portfolio">
            <div class="py-2">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="menu-div-atlas" style="border-radius: 12px 12px 0px 0px !important;">
                        <div class="rounded-div" id="contact-us" style="background-color: rgba(0, 77, 45, 0.99);">
                                <p class="menu-white-atlas text-center py-3">Contactanos para recibir una asesoria personalizada</p>
                            </div>
                        {{-- <div class="tip-rounded-div" style="border-top: 40px solid rgba(0, 77, 45, 0.99);">
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="menu-div-atlas" style="border-radius: 0px 0px 12px 12px !important;">
                        <form action="{{ route('customer_requests.store') }}" method="POST" enctype="multipart/form-data" style="margin-left:20px !important; margin-right:20px !important;">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6 paragraph-black-atlas">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" id="inputEmail" class="form-control" name="email" required placeholder="Email">
                                </div>
                                <div class="form-group col-md-6 paragraph-black-atlas">
                                    <label for="inputName">Nombre</label>
                                    <input type="text" id="inputName" class="form-control" name="name" required placeholder="Nombres y apellidos">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 paragraph-black-atlas">
                                    <label for="inputCity">Ciudad</label>
                                    <input type="text" id="inputCity" class="form-control" required name="city">
                                </div>
                                <div class="form-group col-md-6 paragraph-black-atlas">
                                    <label for="inputAddress">Dirección</label>
                                    <input type="text" id="inputAddress" class="form-control" required name="address" placeholder="Calle 13 # 1234">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 paragraph-black-atlas">
                                    <label for="inputAddress">Teléfono</label>
                                    <input type="number" id="inputAddress" class="form-control" required name="phone" placeholder="">
                                </div>
                            </div>
                            <div class="form-group paragraph-black-atlas">
                                <label for="exampleFormControlTextarea">Mensaje</label>
                                <textarea class="form-control" required id="exampleFormControlTextarea" name="message" rows="2"></textarea>
                            </div>
                            <button type="submit" class="btn paragraph-black-atlas" style="background: rgba(0, 77, 45, 0.99); color: #ffffff;">Enviar</button>
                            <div class="py-1">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        var win = $(this);  
        console.log(win.width());
        if (win.width() >= 850) { 
            document.getElementById("contact-us").classList.remove("rounded-div-contact");
        }
        if (win.width() < 850) { 
            document.getElementById("contact-us").classList.add("rounded-div-contact");
        }
            
        $(window).on('resize', function(){
            var win = $(this);  
            console.log(win.width());
             if (win.width() >= 850) { 
            console.log('WEB');
            document.getElementById("contact-us").classList.remove("rounded-div-contact");
            }
            if (win.width() < 850) { 
                console.log('RESPONSIVE');
                document.getElementById("contact-us").classList.add("rounded-div-contact");
            }
        });
    </script>

@endsection
