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
                <img src="{{ asset('images/products.jpg') }}" class="d-block w-100" >
                <img src="{{ asset('images/banner_uno.png') }}" class="d-block w-100"  >
                <div class="carousel-caption d-none d-md-block caption-rubber">
                    <p class="paragraph-white-atlas" style="color: rgb(143,200,67) !important; font-size: 34px;">PRODUCTOS.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="py-2"></div>
        <div class="row" id="aboutus">
            <div class="col-md-4">
                <img src="{{ asset('images/productos/neopreno.jpg') }}" class="d-block w-100" >
                <br/>
                <b class="paragraph-black-atlas text-left font-tahoma" style="font-size:20px; color: rgba(0, 77, 45, 0.99) !important;">Neopreno</b>
                <p class="paragraph-black-atlas text-justify font-tahoma" style="font-size:20px;">Con este material se fabrican diferentes elementos y accesorios para distintas industrias, pues algunas de sus principales características son su resistencia a altas temperaturas y la alta resistencia a solventes y agentes químicos, lo cual permite que no se distorsione con los daños causados por la flexión y la torsión.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/productos/grama.jpg') }}" class="d-block w-100" >
                <br/>
                <b class="paragraph-black-atlas text-left font-tahoma" style="font-size:20px; color: rgba(0, 77, 45, 0.99) !important;">Grama Sintética</b>
                <p class="paragraph-black-atlas text-justify font-tahoma" style="font-size:20px;">La grama sintética o césped artificial es un producto que principalmente se usa para deportes y paisajes, pues gracias a su color verde casi idéntico a la naturaleza y calidad única para innovar, proporciona un lugar altamente estético y agradable.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/productos/pisos.jpg') }}" class="d-block w-100" >
                <br/>
                <b class="paragraph-black-atlas text-left font-tahoma" style="font-size:20px; color: rgba(0, 77, 45, 0.99) !important;">Pisos en Caucho EPDM Granulado</b>
                <p class="paragraph-black-atlas text-justify font-tahoma" style="font-size:20px;">Es un producto naturalmente antideslizante, incluso cuando esta mojado. Es útil a la hora de renovar o reparar casi cualquier superficie.
                    No se agrieta debido a la capacidad que tiene el producto de expandirse y contraerse con el cambio del clima. Es ideal para áreas en donde se pueda caminar sin calzado, es de textura suave y no raspa. Ideal para piscinas.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('images/productos/product4.jpeg') }}" class="d-block w-100" >
                <br/>
                <b class="paragraph-black-atlas text-left font-tahoma" style="font-size:20px; color: rgba(0, 77, 45, 0.99) !important;">Caucho granulado SBR</b>
                <p class="paragraph-black-atlas text-justify font-tahoma" style="font-size:20px;">El SBR es caucho granulado procedente de neumáticos reciclados. Es extremadamente resistente y se trata del material sintético con mayor volumen de producción del mundo.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/productos/product5.jpeg') }}" class="d-block w-100" >
                <br/>
                <b class="paragraph-black-atlas text-left font-tahoma" style="font-size:20px; color: rgba(0, 77, 45, 0.99) !important;">Resina para piso en caucho EPDM</b>
                <p class="paragraph-black-atlas text-justify font-tahoma" style="font-size:20px;">Es un tipo de resina resistente a los rayos UV y de alto rendimiento. Esencial para aglomerar caucho SBR y EPDM. Usada para fundición de pisos.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/productos/product6.jpg') }}" class="d-block w-100" >
                <br/>
                <b class="paragraph-black-atlas text-left font-tahoma" style="font-size:20px; color: rgba(0, 77, 45, 0.99) !important;">Pegante para instalación de césped sintético.</b>
                <p class="paragraph-black-atlas text-justify font-tahoma" style="font-size:20px;">Pegamento a base de poliuretano, adhesivo permanente usado para instalación de césped sintético.
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/productos/epdm.jpeg') }}" class="d-block w-100" >
                <br/>
                <b class="paragraph-black-atlas text-left font-tahoma" style="font-size:20px; color: rgba(0, 77, 45, 0.99) !important;">Caucho EPDM</b>
                <p class="paragraph-black-atlas text-justify font-tahoma" style="font-size:20px;">El EPDM es un material compuesto de Etileno, Propileno y Dieno de alta calidad. La denominación proviene de las iniciales de estos materiales a las que se le añade la letra M para indicar que cuenta con una cadena saturada de propileno según la clasificación ASTM. En Fairmont Polymers Resources somos especialistas en la fabricación y distribución de este material comúnmente conocido como caucho. En este post, intentaremos dar a conocer los beneficios principales de este componente y las distintas utilidades que tiene.</p>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12">
                <b class="paragraph-black-atlas text-left font-tahoma" style="font-size:20px; color: rgba(0, 77, 45, 0.99) !important;">PISO EN PVC O VINILO.</b>
                <br/>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/productos/pvc1.jfif') }}" class="d-block w-100" >
                <br/>
                <b class="paragraph-black-atlas text-left font-tahoma" style="font-size:20px; color: rgba(0, 77, 45, 0.99) !important;">Línea industrial y comercial</b>
                <p class="paragraph-black-atlas text-justify font-tahoma" style="font-size:20px;">Los pisos en vinilo para uso comercial e industrial son de alto tráfico, con gran capacidad de resistencia a la abrasión, resistente a químicos y las manchas, además cuenta con una gran variedad de colores que le permite adaptarse a diferentes ambientes y diseños.
                    Su alta especificación lo hace apto para uso comercial pesado como en hoteles, oficinas, salones de eventos, clínicas, hospitales, colegios, universidades.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/productos/pvc2.jfif') }}" class="d-block w-100" >
                <br/>
                <b class="paragraph-black-atlas text-left font-tahoma" style="font-size:20px; color: rgba(0, 77, 45, 0.99) !important;">Línea residencial</b>
                <p class="paragraph-black-atlas text-justify font-tahoma" style="font-size:20px;">Los pisos de vinilo se distinguen por su innovación, porque son un elemento muy práctico a la hora de remodelar algún espacio, debido a su fácil instalación. además, cuentan con diferentes diseños que le darán un toque especial al lugar que desees.

                    Este elemento es un tipo de tapiz plástico que se utiliza en lugares muy concurridos, como casas, negocios, escuelas infantiles, entre otros. Estos pisos cuentan con un material que tiene una buena duración.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <br/>
                <br/>
                <img src="{{ asset('images/productos/pvc3.jfif') }}" class="d-block w-100" >
            </div>
            <div class="col-md-6">
                <br/>
                <ul>
                    <p class="paragraph-black-atlas text-left font-tahoma" style="font-size:20px; color: rgba(0, 77, 45, 0.99) !important;">
                        <b>Ventajas</b>
                    </p>
                </ul>
                <p class="paragraph-black-atlas text-justify font-tahoma" style="font-size:20px;">Facilidad de limpieza: tolera el contacto con el agua y solo se necesita de jabón y agua para limpiar.

                    Facilidad al instalar: se puede poner sobre el piso que tienes, es en obra seca y no requiere de personal especializado para instalarlo.
                    
                    Presenta una variedad de diseños: este elemento tiene una variedad de diseños y colores que le brindarán un aspecto sensacional a tus espacios. Sus diseños vienen en imitación de madera, piedras o cerámica.
                    
                    Adicional a esto, los pisos de vinilo son confortables y son excelentes para los climas de invierno, debido a que proporcionan un ambiente cálido y en verano hacen que sea más fresco.</p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-12">
                <br/>
                <b class="paragraph-black-atlas text-left font-tahoma" style="font-size:20px; color: rgba(0, 77, 45, 0.99) !important;">TAPETE GOMA EVA O FOAMI</b>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/productos/foami1.jfif') }}" class="d-block w-100" >
                <br/>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/productos/foami2.jfif') }}" class="d-block w-100" >
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="paragraph-black-atlas text-justify font-tahoma" style="font-size:20px;">Los tapetes en Goma Eva, son ideales para los niños menores de 7 años. Pues, este material no solo es muy llamativo para ellos, si no que también les brinda seguridad y comodidad para sus actividades de estimulación y movimiento.
                    Estos tapetes, son un nuevo concepto que mezcla la seguridad y la diversión de los niños, lo cual brinda tranquilidad a los padres. Esto tiene como finalidad, reducir los accidentes en los más pequeños, pues la mayoría de estos suceden en los juegos infantiles por las superficies duras o no convenientemente protegidas.</p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-12">
                <br/>
                <b class="paragraph-black-atlas text-left font-tahoma" style="font-size:20px; color: rgba(0, 77, 45, 0.99) !important;">IMPERMEABILIZANTE U HIDROFUGO</b>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <br/>
                <img src="{{ asset('images/productos/acrilico1.jfif') }}" class="d-block w-100" >
                <br/>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="paragraph-black-atlas text-justify font-tahoma" style="font-size:20px;">Es un acrílico impermeabilizante de alta elasticidad,
                    resistencia a la intemperie. Está reforzado con fibras minerales que le permiten soportar el
                   tráfico residencial a cuatro manos, mínimo sin disolverse.
                   
                   Especial para repintado de capas asfálticas, losas de hormigón que tengan filtración por grietas
                   
                   Anticorrosivo: funciona sobre todo metal, asfalto, paredes, tejas, ladrillo, etc. no apto para madera o plástico.
                   
                    Es 96% sólido y a base de agua y no es tóxico.
                   Mantenimiento cada 10 años después de 4 manos iniciales con intervalos de tiempo que permiten secar al tacto. (Terrazas)
                   Mantenimiento de la zona del vehículo cada 6 años después de 5 manos iniciales con intervalos de tiempo que permitan secar al tacto. (Parking)
                    no absorbe los rayos ultravioleta, devolviéndolos al 100% al medio ambiente. Ninguna degradación del color reduce la temperatura y es permeable al vapor.
                   
                   El abrigo es fácil de mantener y se puede lavar con agua y una escoba si es necesario. Se puede limpiar con lavadora a presión.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/productos/acrilico2.jfif') }}" class="d-block w-100" >
                <br/>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/productos/acrilico3.jfif') }}" class="d-block w-100" >
                <br/>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-12">
                <br/>
                <b class="paragraph-black-atlas text-left font-tahoma" style="font-size:20px; color: rgba(0, 77, 45, 0.99) !important;">ARENA SILICE O SILICA</b>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-1">
            </div>
            <div class="col-md-5">
                <br/>
                <img src="{{ asset('images/productos/silice2.jfif') }}" class="d-block w-100" >
                <br/>
            </div>
            <div class="col-md-5">
                <br/>
                <img src="{{ asset('images/productos/silice3.jfif') }}" class="d-block w-100" >
                <br/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="paragraph-black-atlas text-justify font-tahoma" style="font-size:20px;">La arena sílice es uno de los minerales que más se encuentra en la superficie de la tierra y con un adecuado proceso puede ser utilizado como materia prima de forma industrial, deportiva y más, usos: vidrio, sandblasting, lechos filtrantes, canchas de futbol, canchas vóley playa, pistas, piscinas, pegante cerámico, pintura y mucho más.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <br/>
                <img src="{{ asset('images/productos/silice1.jfif') }}" class="d-block w-100" >
                <br/>
            </div>
            <div class="col-md-4">
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
