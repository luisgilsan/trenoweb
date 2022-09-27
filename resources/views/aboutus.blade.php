@extends('layouts.principal')

<style>
    .caption-rubber{
        background-color: rgba(0, 0, 0, 0.7) !important;  
        bottom: 45% !important;
        top: 45% !important;
        right: 0% !important;
        left: 80% !important;
        border-radius: 30px 0px 0px 30px; 
    }
</style>

@section('content')    

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/aboutus.jpg') }}" class="d-block w-100" alt="...">
                <img src="{{ asset('images/banner_uno.png') }}" class="d-block w-100"  alt="...">
                <div class="carousel-caption d-none d-md-block caption-rubber">
                    <p class="paragraph-white-atlas" style="color: rgb(143,200,67) !important; font-size: 34px;">NOSOTROS.</p>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="container py-2">
        <div class="row" id="aboutus">
            <div class="col-md-12">
                <p class="paragraph-black-atlas text-justify font-tahoma" style="font-size:22px;">Somos una empresa joven con personal altamente calificado y experimentado en la producción, distribuciones e instalaciones de juegos y áreas deportivas, todos nuestros proyectos son enfocados en la utilización de SBR para ser cada día más amables con el medio ambiente, empresa 100% colombiana.</p>
            </div>
        </div>
    </div>
    <br/>

    <div style="background-color: rgba(0, 77, 45, 0.99) !important;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center font-tahoma" id="services">
                    <p style="color: #ffffff; font-size:26px;">MISIÓN</p>
                </div>
            </div>
        </div>
        <div class="container-fluid py-3 font-tahoma">
            <div class="row">
                <div class="col-md-12">
                    <p class="subtitle-white-atlas text-left font-tahoma" style="margin-left:20px !important; margin-right:10px !important;">
                        Nuestra misión es crear un laso de honestidad y confianza con nuestros clientes, para consigo trabajar juntos en fin de la productividad de sus negocios, respaldados de la más alta calidad de nuestros servicios.

                        La honestidad y la integridad nos permiten diferenciarnos en el mercado y nos contribuye para seguir siendo líderes a nivel nacional e internacional
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center font-tahoma" id="services">
                    <p style="color: #ffffff; font-size:26px;">VISIÓN</p>
                </div>
            </div>
        </div>
        <div class="container-fluid py-3 font-tahoma">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="subtitle-white-atlas text-left font-tahoma" style="margin-left:20px !important; margin-right:10px !important;">
                        Nuestra visión es basada en nuestra experiencia, y conocimiento del mercado, queremos convertirnos en la mejor empresa con más alta calidad de servicio a nivel nacional y extender nuestra capacidad de trabajo a todo sur américa.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br/>
    
    <div>
        <div class="container" id="portfolio">
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
    
    <script>
        var msg = '{{Session::get('alert')}}';
        console.log('Alerta');
         var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
    </script>

    <script type="text/javascript">
        document.getElementById("products-div").classList.add("display-true");
        document.getElementById("home-div").classList.add("display-false");
        document.getElementById("home-menu").classList.add("display-true");   
        document.getElementById("services-menu").classList.add("display-false");
        if (win.width() >= 850) { 
        document.getElementById("contact-us").classList.remove("rounded-div-contact");
        }
        if (win.width() < 850) { 
            document.getElementById("contact-us").classList.add("rounded-div-contact");
        }
    </script>

    


@endsection
