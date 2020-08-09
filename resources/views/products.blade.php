@extends('layouts.principal')


<style>
.motors-responsive{
    height: 120px !important;
}

</style>

<script>
    // $('.carousel').carousel({
    //     interval: 300});
</script>

@section('content')    

    <div class="container-fluid" style="margin-top: 60px;">
        <div class="menu-div-atlas">
            <div class="row">
                <div class="col-md-12">
                    <div class="rounded-div" style="background-color: #05bbaf; border-radius: 12px 12px 0px 0px !important;">
                        <p class="menu-white-atlas text-center py-3">HIDRAULICOS</p>
                    </div>
                    <div class="tip-rounded-div" style="border-top: 30px solid #05bbaf;"> </div>
                </div>
            </div>
            <div class="row text-center" >
                <div class="col-md-12 py-2" >
                    <p class="paragraph-black-atlas text-justify py-2" style="margin-left: 30px; margin-right: 30px;">Somos especialistas en sistemas hidráulicos KAWASAKI, SUSTRAND, REXROTH, CASSAPA y contamos con stock de repuestos para bombas hidráulicas, motorreductores de translación y de giro, bloques valvulares, electroválvulas.</p>
                
                </div>
            </div>
            <div class="row text-center" >
                <div class="col-md-4 py-2" >
                    <img class="border-img" style="width: 80%;" src="{{ asset('images/productos/hidraulicos1.jpg')}}">
                </div>
                <div class="col-md-4 py-2">
                    <img class="border-img" style="width: 80%;" src="{{ asset('images/productos/hidraulicos2.jpeg')}}">
                </div>
                <div class="col-md-4 py-2">
                    <img class="border-img" style="width: 80%;" src="{{ asset('images/productos/hidraulicos3.jpeg')}}">
                </div>
            </div>
            <div class="row text-center" >
                <div class="col-md-6 py-2" >
                    <p class="paragraph-black-atlas text-justify py-1" style="margin-left: 30px; margin-right: 30px;">Kit de sellos para cilindros hidráulicos, bombas hidráulicas, motores de traslación , motores de giro y bloques valvulares para todas las marcas.</p>
                </div>
                <div class="col-md-6 py-2">
                    <img class="border-img" style="width: 80%;" src="{{ asset('images/productos/sellos.jpg')}}">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-3">
        <div class="menu-div-atlas">
            <div class="row">
                <div class="col-md-12">
                    <div class="rounded-div" id="div-motors" style=" border-radius: 12px 12px 0px 0px !important;">
                        <p class="menu-white-atlas text-center py-3">MOTORES & TRANSMISIÓN</p>
                    </div>
                    <div class="tip-rounded-div"> </div>
                </div>
            </div>
            <div class="row text-center" >
                <div class="col-md-12 py-2" >
                    <p class="paragraph-black-atlas text-justify py-2" style="margin-left: 30px; margin-right: 30px;">Contamos con repuestos para motores CATERPILLAR, HINO, IVECO, CUMMINS, VOLVO, ISUZU, MITSUBISHI entre otras marcas.</p>
                </div>
            </div>
            <div class="row text-center" >
                <div class="col-md-6 py-1" >
                    <div id="motor-uno"></div>
                    <img class="border-img"  style="width: 80%;" src="{{ asset('images/productos/motor.jpg')}}">
                </div>
                <div class="col-md-6 py-1">
                    <img class="border-img" style="width: 80%;" src="{{ asset('images/productos/transmision.jpg')}}">
                </div>
            </div>
            <div class="row text-center" >
                <div class="col-md-12 py-2" >
                    <p class="paragraph-black-atlas text-center py-2" style="margin-left: 30px; margin-right: 30px;">Contamos con repuestos de servotransmisiones , tren delantero y tren trasero para todas la marcas de equipos de construcción y agrícola.</p>
                </div>
            </div>
            <div class="row text-center" >
                <div class="col-md-6 py-1">
                    <img class="border-img" style="width: 80%;" src="{{ asset('images/productos/tren1.jpg')}}">
                </div>
                <div class="col-md-6 py-1">
                    <div id="tren-uno"></div>
                    <img class="border-img" style="width: 80%;" src="{{ asset('images/productos/tren2.jpg')}}">
                </div>
            </div>
            <div class="py-1"></div>
        </div>
    </div>

    <div class="container-fluid py-2" >
        <div class="menu-div-atlas">
            <div class="row">
                <div class="col-md-12">
                    <div class="rounded-div" style=" border-radius: 12px 12px 0px 0px !important;">
                        <p class="menu-white-atlas text-center py-3">OTROS</p>
                    </div>
                    <div class="tip-rounded-div"> </div>
                </div>
            </div>
            <div class="row text-center" >
                <div class="col-md-6 py-1" >
                    <h5 class="subtitle-blue-atlas text-center" style="margin-left:30px !important;  margin-top:50px !important;">HERRAMIENTA DE CORTE</h5>
                    <p class="paragraph-black-atlas text-justify py-2" style="margin-left: 30px; margin-right: 30px;">Vital en la producción de las obras ya que una buena calidad en la herramienta de corte no solo optimiza los trabajos en obra, sino que disminuye tiempos de operación y el valioso ahorro de combustible, por esos nuestros dientes ,cuchillas , esquineras, sobre esquineras y aditamentos de balde son los preferidos en las obras.</p>
                </div>
                <div class="col-md-6 py-1">
                    <img class="border-img" style="width: 80%;" src="{{ asset('images/productos/corte.jpg')}}">
                </div>
            </div>

            <div class="row text-center" id="miscelaneos-web">
                <div class="col-md-6 py-2">
                    <img class="border-img" style="width: 80%;" src="{{ asset('images/productos/miscelaneos.jpg')}}">
                </div>
                <div class="col-md-6 py-2" >
                    <h5 class="subtitle-blue-atlas text-center" style="margin-right:10px !important; margin-top:100px !important;">REPUESTOS MISCELÁNEOS</h5>
                    <p class="paragraph-black-atlas text-justify py-2" style="margin-left: 30px; margin-right: 30px;">Filtración, lubricantes, piezas eléctricas y de baja rotación.</p>
                </div>
            </div>

            <div class="row text-center" id="miscelaneos-responsive">
                <div class="col-md-6 py-2" >
                    <h5 class="subtitle-blue-atlas text-center" style="margin-left:30px !important; margin-right:10px !important;">REPUESTOS MISCELÁNEOS</h5>
                    <p class="paragraph-black-atlas text-justify py-2" style="margin-left: 30px; margin-right: 30px;">Filtración, lubricantes, piezas eléctricas y de baja rotación.</p>
                </div>
                <div class="col-md-6 py-2">
                    <img class="border-img" style="width: 80%;" src="{{ asset('images/productos/miscelaneos.jpg')}}">
                </div>
            </div>
        </div>
    </div>


    <div>
        <div class="container" id="portfolio">
            <div class="row">
                <div class="col-md-12">
                    <div class="menu-div-atlas" style="border-radius: 12px 12px 0px 0px !important;">
                        <div class="rounded-div" id="contact-us" style="background-color: #05bbaf;">
                                <p class="menu-white-atlas text-center py-3">Contactanos para recibir una asesoria personalizada</p>
                            </div>
                        <div class="tip-rounded-div" style="border-top: 30px solid #05bbaf;">
                        </div>
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
                            <button type="submit" class="btn paragraph-black-atlas" style="background: #05bbaf">Enviar</button>
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
