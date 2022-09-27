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
                <img src="{{ asset('images/apps.jpg') }}" class="d-block w-100" alt="...">
                <img src="{{ asset('images/banner_uno.png') }}" class="d-block w-100"  alt="...">
                <div class="carousel-caption d-none d-md-block caption-rubber">
                    <p class="paragraph-white-atlas" style="color: rgb(143,200,67) !important; font-size: 34px;">APLICACIONES.</p>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <div class="container-fluid">
        <div class="row" id="aboutus">
            <div class="col-md-1">
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/construccion.png') }}" style="width: 26%">
                <p class="font-tahoma" style="color: rgb(0,104,55); font-size:40px;"><b>CONSTRUCCIÓN</b></p>
                <img src="{{ asset('images/construccion.jpg') }}" class="d-block w-100" alt="...">
                <br/>
                <p class="paragraph-black-atlas text-justify font-tahoma" style="font-size:22px;">	Fabricamos productos especiales en caucho y plástico para el sector de la construcción, resolviendo de manera personalizada las necesidades de cada cliente.</p>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/urbanismo.png') }}" style="width: 26%">
                <p class="font-tahoma" style="color: rgb(0,104,55); font-size:40px;"><b>URBANISMO</b></p>
                <img src="{{ asset('images/urbanismo.jpg') }}" class="d-block w-100" alt="...">
                <br/>
                <p class="paragraph-black-atlas text-justify font-tahoma" style="font-size:22px;">Contamos con este innovador, lindo y diferente tipo de mobiliario para espacios públicos. Sirve también como decoración y por sus múltiples colores, llaman la atención y dan vida en parques infantiles, parques de estar o demás espacios.</p>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row" id="aboutus">
            <div class="col-md-1">
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/parques.png') }}" style="width: 26%">
                <p class="font-tahoma" style="color: rgb(0,104,55); font-size:40px;"><b>PARQUES</b></p>
                <img src="{{ asset('images/parques.jpg') }}" class="d-block w-100" alt="...">
                <br/>
                <p class="paragraph-black-atlas text-justify font-tahoma" style="font-size:22px;">En nuestra línea infantil, buscamos ofrecer los mejores productos principalmente para la diversión y seguridad de los niños, sin embargo, también nos importa velar por la comodidad y tranquilidad de los padres. .</p>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/vias.png') }}" style="width: 26%">
                <p class="font-tahoma" style="color: rgb(0,104,55); font-size:40px;"><b>VÍAS</b></p>
                <img src="{{ asset('images/vias.jpg') }}" class="d-block w-100" alt="...">
                <br/>
                <p class="paragraph-black-atlas text-justify font-tahoma" style="font-size:22px;">Encuentra en Rubber Granulate productos para la línea de señalización vehicular, que aportan en la seguridad vial de los peatones y conductores.</p>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        
    </div>
    <br/>

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
