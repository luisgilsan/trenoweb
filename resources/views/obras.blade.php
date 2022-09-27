@extends('layouts.principal')


<style>
.motors-responsive{
    height: 120px !important;
}

.caption-rubber{
        background-color: rgba(0, 0, 0, 0.7) !important;  
        bottom: 45% !important;
        top: 45% !important;
        right: 0% !important;
        left: 80% !important;
        border-radius: 30px 0px 0px 30px; 
    }

</style>

<script>
    // $('.carousel').carousel({
    //     interval: 300});
</script>

@section('content')    

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/obras.jpg') }}" class="d-block w-100" alt="...">
                <img src="{{ asset('images/banner_uno.png') }}" class="d-block w-100"  alt="...">
                <div class="carousel-caption d-none d-md-block caption-rubber">
                    <p class="paragraph-white-atlas" style="color: rgb(143,200,67) !important; font-size: 34px;">OBRAS.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-3">
        <div class="menu-div-atlas">
            <div class="row">
                <div class="col-md-12">
                    <p class="menu-white-atlas text-center py-3" style="font-size:24px; color: rgba(0, 77, 45, 0.99) !important;"><b>PARQUES EN SANTANDER</b></p>
                </div>
            </div>
            <div class="row text-center" >
                <div class="col-md-12 py-2" >
                    <p class="paragraph-black-atlas text-justify py-2" style="margin-left: 30px; margin-right: 30px;">Parque infantil instalado en Barichara, 20 de agosto del 2020.</p>
                </div>
            </div>
            <div class="row text-center" >
                <div class="col-md-4 py-1" >
                    <div id="motor-uno"></div>
                    <img class="border-img"  style="width: 80%;" src="{{ asset('images/obras/parque1.jpeg')}}">
                </div>
                <div class="col-md-4 py-1">
                    <img class="border-img" style="width: 80%;" src="{{ asset('images/obras/parque2.jpeg')}}">
                </div>
                <div class="col-md-4 py-1">
                    <img class="border-img" style="width: 80%;" src="{{ asset('images/obras/parque3.jpeg')}}">
                </div>
            </div>
            
            
            <div class="py-1"></div>
        </div>
    </div>

    <div class="container-fluid py-3">
        <div class="menu-div-atlas">
            <div class="row">
                <div class="col-md-12">
                    <p class="menu-white-atlas text-center py-3" style="font-size:24px; color: rgba(0, 77, 45, 0.99) !important;"><b>CANCHA FUTBOL 5 CUNDINAMARCA</b></p>
                </div>
            </div>
            <div class="row text-center" >
                <div class="col-md-12 py-2" >
                    <p class="paragraph-black-atlas text-justify py-2" style="margin-left: 30px; margin-right: 30px;">Cancha de futbol 5 en Agua de Dios, 19 de enero de 2019.</p>
                </div>
            </div>
            <div class="row text-center" >
                <div class="col-md-4 py-1" >
                    <div id="motor-uno"></div>
                    <img class="border-img"  style="width: 80%;" src="{{ asset('images/obras/cancha1.jpeg')}}">
                </div>
                <div class="col-md-4 py-1">
                    <img class="border-img" style="width: 80%;" src="{{ asset('images/obras/cancha2.jpeg')}}">
                </div>
                <div class="col-md-4 py-1">
                    <img class="border-img" style="width: 80%;" src="{{ asset('images/obras/cancha3.jpeg')}}">
                </div>
            </div>
            
            
            <div class="py-1"></div>
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
    </script>

<script type="text/javascript">
    var win = $(this);  
    console.log(win.width());


    if (win.width() >= 850) { 
        document.getElementById("contact-us").classList.remove("rounded-div-contact");
        document.getElementById("miscelaneos-responsive").classList.add("display-false");
        document.getElementById("miscelaneos-web").classList.remove("display-false");
        document.getElementById("motor-uno").classList.add("py-2");
        document.getElementById("tren-uno").classList.add("py-2");
        document.getElementById("div-motors").classList.remove("motors-responsive");   
    }
    if (win.width() < 850) { 
        document.getElementById("contact-us").classList.add("rounded-div-contact");
        document.getElementById("miscelaneos-responsive").classList.remove("display-false");
        document.getElementById("miscelaneos-web").classList.add("display-false");
        document.getElementById("motor-uno").classList.remove("py-2");
        document.getElementById("tren-uno").classList.remove("py-2");
        document.getElementById("div-motors").classList.add("motors-responsive");
    }
        
    $(window).on('resize', function(){
        var win = $(this);  
        console.log(win.width());
         if (win.width() >= 850) { 
        console.log('WEB');
            document.getElementById("contact-us").classList.remove("rounded-div-contact");
            document.getElementById("miscelaneos-responsive").classList.add("display-false");
            document.getElementById("miscelaneos-web").classList.remove("display-false");
            document.getElementById("motor-uno").classList.add("py-2");
            document.getElementById("tren-uno").classList.add("py-2");
            document.getElementById("div-motors").classList.remove("motors-responsive");
        }
        if (win.width() < 850) { 
            console.log('RESPONSIVE');
            document.getElementById("contact-us").classList.add("rounded-div-contact");
            document.getElementById("miscelaneos-responsive").classList.remove("display-false");
            document.getElementById("miscelaneos-web").classList.add("display-false");
            document.getElementById("motor-uno").classList.remove("py-2");
            document.getElementById("tren-uno").classList.remove("py-2");
            document.getElementById("contact-us").classList.add("rounded-div-contact");
            document.getElementById("div-motors").classList.add("motors-responsive");
        }
    });
</script>


@endsection
