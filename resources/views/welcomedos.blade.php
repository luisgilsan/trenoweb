@extends('layouts.principal')


<style>

</style>

<script>
    // $('.carousel').carousel({
    //     interval: 300});
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
            <img src="{{ asset('images/slider_3-copia.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>ATLAS</h3>
              <p>Todo en maquinaria pesada.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/slider_4-copia.jpg') }}" class="d-block w-100"  alt="...">

            {{-- position: absolute; clip: rect(0, 100px, 200px, 0);
            Fuente: https://www.iteramos.com/pregunta/18749/como-puedo-mostrar-solo-una-parte-de-una-imagen-en-html--css --}}

            <div class="carousel-caption d-none d-md-block">
              <h3>ATLAS</h3>
              <p>Todo en maquinaria pesada.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/slider_5-copia.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>ATLAS</h3>
              <p>Todo en maquinaria pesada.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <div>
        <br/>
        <div class="container-fluid" id="products">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="rounded-div" style="background-color: #05bbaf; border-radius: 0px 0px 12px 12px !important;">
                       <p class="menu-white-atlas text-center py-3">NUESTRAS MARCAS</p>
                    </div>
                    <div class="tip-rounded-div" style="border-top: 40px solid #05bbaf;">
                    </div>
                    <div class="row">
                        <div class="col-md-8 text-center"> 
                            <div class="py-2">
                            </div>
                            <img class="card-img-top border-img " style="width: 70%;" src="{{ asset('images/brands_atlas.jpg')}}" alt="Card image cap">
                        </div>
                        <div class="col-md-4 text-center py-3" style="vertical-align: baseline !important;"> 
                            <a>
                                <button class="btn button-float-atlas menu-white-atlas" id="products-button" style="margin-left:-10% !important; width: 220px !important; font-size: 20px !important;">VER PRODUCTOS</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <div class="py-3"></div>   
    </div>

    <div class="nav-backgroud-standard-black">
        <div class="row">
            <div class="col-md-12 text-center" id="services">
                <img src="{{ asset('images/services.png') }}" style="width: 360px;"/>
            </div>
        </div>
        <div class="container-fluid py-3">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="subtitle-white-atlas text-left" style="margin-left:20px !important; margin-right:10px !important;">Servicio de reparación y mantenimiento</h5>
                    <p class="paragraph-white-atlas text-justify py-2" style="margin-left:20px !important; margin-right:10px !important;">ATLAS cuenta con una amplia colaboración de talleres especializados, donde el conocimiento de manos expertas repararán los componentes que se necesiten con el fin de que sus máquinas se mantengan al 100% de rendimiento en el campo del trabajo. Nuestro grupo de labor ofrece el soporte necesario para su confiabilidad y le mantiene informado sobre el estado de reparación las 24 horas al día. ATLAS, con su modelo de trabajo, basado en altos estándares de calidad, le asegura a usted y a su máquina las perfectas condiciones de productividad y competitividad para su negocio.</p>
                </div>
                <div class="col-md-6 text-center">
                    <h5 class="subtitle-white-atlas text-left" style="margin-left:20px !important; margin-right:10px !important;">Asesoramiento técnico</h5>
                    <p class="paragraph-white-atlas text-justify py-2" style="margin-left:20px !important; margin-right:10px !important;">Nuestro servicio Técnico y Post-Venta permite crear una relación estrecha con nuestro cliente, para compartir toda la información y todo el asesoramiento necesario en partes de recambio y de mantenimiento, asegurando una solución pronta a cualquier imprevisto o consulta técnica que sea requerida por parte del mismo. El equipo de trabajo de ATLAS está cualificado y supervisa constantemente la calidad de los suministros, proporcionando el mejor y más adecuado asesoramiento técnico para su correcta utilización.</p>
                    <a href="#portfolio">    
                        <img src="{{ asset('images/request_service.png') }}" style="width: 220px;"/>
                    </a>
                </div>
                <div class="container py-1"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row py-3">
            <div class="col-md-6 text-center">
                <div class="menu-div-atlas">
                    <div class="rounded-div" style="background-color: #05bbaf;">
                        <p class="menu-white-atlas text-center py-3">GARANTÍA</p>
                    </div>
                    <div class="tip-rounded-div" style="border-top: 40px solid #05bbaf;">
                    </div>
                    <p class="paragraph-black-atlas text-justify py-2" style="margin-left: 30px; margin-right: 30px;">ATLAS se distingue por ofrecer productos totalmente garantizados, los cuales son específicamente seleccionados por nuestros técnicos en conjunto con los más prestigiosos y reconocidos fabricantes de piezas a nivel mundial, creando así un lazo de confianza irrompible con nuestros clientes.</p>
                    <div style="height: 40px;"></div>
                </div>
                <img class="img-menu-atlas" src="{{ asset('images/warranty_icon.png')}}">
            </div>
            <div class="col-md-6  text-center">
                <div class="menu-div-atlas">
                    
                    <div class="rounded-div" style="background-color: #bf9721;">
                        <p class="menu-white-atlas text-center py-3">LOGÍSTICA</p>
                    </div>
                    <div class="tip-rounded-div" style="border-top: 40px solid #bf9721;">
                    </div>
                    <p class="paragraph-black-atlas text-justify py-2" style="margin-left: 30px; margin-right: 30px;">Contamos con un grupo de equipo especializado de logística para reafirmar y asegurar la calidad y rapidez de nuestro servicio, trabajando conjuntamente con las principales empresas de transporte nacional e internacional para lograr eficacia en la operación y brindarle lo mejor.</p>
                    <div style="height: 40px;"></div>
                </div>
                <img class="img-menu-atlas" src="{{ asset('images/logistics_icon.png')}}">
            </div>
        </div>
                                
        <div class="row py-3">
            <div class="col-md-6 offset-md-3 text-center">
                <div class="menu-div-atlas">
                    <div class="rounded-div">
                        <p class="menu-white-atlas text-center py-3">ATENCIÓN AL CLIENTE</p>
                    </div>
                    <div class="tip-rounded-div">
                    </div>
                    <p class="paragraph-black-atlas text-justify py-2" style="margin-left: 30px; margin-right: 30px;">ATLAS se encuentra a su disposición con un servicio de atención al cliente con profesionales del sector, buscando llegar a sus necesidades y que las mismas sean atendidas de inmediato, proporcionando asesoramiento e información eficaz para su empresa. Trabajamos de forma concreta, rápida y personalizada, ayudando a encontrar los repuestos requeridos. El departamento de ventas tiene disponibilidad directa a referencias con disponibilidad inmediata y le tendrán informado 24/7.</p>
                    <div style="height: 40px;"></div>
                </div>
                <img class="img-menu-atlas" src="{{ asset('images/service_icon.png')}}">
            </div>
        </div>

    </div> 
    <br/>
    <div>
        <div class="container" id="portfolio">
            <div class="row">
                <div class="col-md-12">
                    <div class="menu-div-atlas" style="border-radius: 12px 12px 0px 0px !important;">
                        <div class="rounded-div" id="contact-us" style="background-color: #05bbaf;">
                                <p class="menu-white-atlas text-center py-3">Contactanos para recibir una asesoria personalizada</p>
                            </div>
                        <div class="tip-rounded-div" style="border-top: 40px solid #05bbaf;">
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
    
    <script type="text/javascript">
        var win = $(this);  
        console.log(win.width());
        if (win.width() >= 850) { 
            document.getElementById("contact-us").classList.remove("rounded-div-contact");
            document.getElementById("products-button").classList.add("products-button-top");
        }
        if (win.width() < 850) { 
            document.getElementById("contact-us").classList.add("rounded-div-contact");
            document.getElementById("products-button").classList.remove("products-button-top");
        }
            
        $(window).on('resize', function(){
            var win = $(this);  
            console.log(win.width());
             if (win.width() >= 850) { 
            console.log('WEB');
            document.getElementById("contact-us").classList.remove("rounded-div-contact");
            document.getElementById("products-button").classList.add("products-button-top");
            }
            if (win.width() < 850) { 
                console.log('RESPONSIVE');
                document.getElementById("contact-us").classList.add("rounded-div-contact");
                document.getElementById("products-button").classList.remove("products-button-top");
            }
        });
    </script>

@endsection
