@extends('layouts.principal')


<style>
.links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}

.content {
            text-align: center;
        }


.title {
        font-size: 84px;
        color: #ff6b6f;
    }

    .m-b-md {
        margin-bottom: 30px;
        margin-top: 100px;
    }

    .main-font-welcome-atlas{
        color: #ffffff;
        font-size: 600%;
    }

    .main-font-under-atlas{
        border-radius: 15px;
            /* background-color: #fcb603; */
        color: #ffffff;
        font-size: 140%;
        font-weight: bold;
        margin-top: 0%;
        -webkit-text-stroke: .5px #fcb603; /* width and color */
        font-family: sans; 
        background-color: rgba(0, 0, 0,.7) !important;
        max-width: 200px;
    }

    .font-paragram-under-atlas{
        color: #ffffff;
        font-size: 100%;
    }

    .button-atlas{
        background-color: #fcb603 !important;
        font-weight: bold !important;
        color: #ffffff !important;
    }

    .right-div-atlas{
        background-color: #000000;
    }

    .third-div-atlas{
        background-color: rgba(0, 0, 0,.9) !important;
    }

    .font-forte-black{
        color:#0097a8;
        font-weight: bold;
        font-family: Noto Sans;
        font-size: 30px;;
    }

    .font-blue-black{
        color:#0097a8;
        font-weight: bold;
        font-family: Noto Sans;
        font-size: 24px;;
    }

    .font-forte-paragraph{
        color:#000000;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 160%;
    }

    .white-forte-paragraph{
        color:#ffffff;
        font-family: 'Calibri';
        font-size: 140%;
    }
    

    .font-forte-atlas{
        color: #0097a8;
        font-family: forte;
        font-size: 300%;
    }

    .font-arial-atlas{
        color: #009898;
        font-family:   Calibri, 'Trebuchet MS';
        font-size: 30px;
        font-weight: bold;
        font-family: Noto Sans;
    }

    /* Centered text */
    .centered-atlas{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .atlas-car-text{
        font-size: 50px;
        color: #fff;
        -webkit-text-stroke: 2px black;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
    }

    .border-img{
        border-radius: 16% 16% 16% 16% !important;
        border-width: 5px !important;
        border-style: solid !important;
        border-color: #009898 !important;
        background: #009898;
    }

    .border-img-service{
        border-radius: 16% 16% 16% 16% !important;
        border-width: 5px !important;
        border-style: solid !important;
        border-color: #009898 !important;
        background: #0097a8;
        width: 100%;
    }

</style>

<script>
    // $('.carousel').carousel({
    //     interval: 300});
</script>

@section('content')    


    <div id="carouselExampleIndicators" class=" container carousel slide py-5" data-ride="carousel"
        style="z-index:1;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('images/bg_2_atlas.png')}}" 
                    alt="First slide"> 
                <div class="centered-atlas atlas-car-text">RESPONSABILIDAD</div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/slider_2.jpg')}}" 
                    alt="Second slide">
                <div class="centered-atlas atlas-car-text">GARANTÍA</div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/excavators.jpg')}}" 
                    alt="Third slide">
                <div class="centered-atlas atlas-car-text">CALIDAD</div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

     <div class="container">
        <hr  style=" height: 1px; background-color: #2f494a;"/>
     </div>
    <div class="container-fluid" >

        <div class="row" id="aboutus">
            <div class="col-md-12">
                <h2 class="font-forte-black text-center" >¿QUIENES SOMOS?</h2>
                <p class="font-forte-paragraph text-justify py-2">ATLAS es una empresa dedicada al suministro de repuestos y productos de mantenimiento para todo tipo de maquinaria de obras públicas y agrícola.
                </p>
                <p class="font-forte-paragraph text-justify">Contamos con una amplia base de referencias disponibles para nuestros clientes, con la mayor información especializada y clara de cada producto, asegurándonos así de dar el mejor servicio personalizado a cada uno de nuestros consumidores. Una empresa con ambición al progreso, dedicada a la mejora de su servicio, prometiendo de esta manera una excelencia en agilidad, calidad y acompañamiento. 
                </p>
                <p class="font-forte-paragraph text-justify">Para ATLAS es prioridad el tiempo, ya que se es consciente en la importancia para la productividad de nuestros clientes, por eso fortalecemos nuestra rapidez día a día con tecnología y nuevos métodos de logística para así incrementar tu productividad y la nuestra.
                </p>
                <p class="font-forte-paragraph text-justify">ATLAS es tan en un proceso interminable de expansión, con fin de establecer estrategias internacionales que nos permitan incrementar nuestras redes comerciales en el exterior. La dimensión internacional alcanzada por la empresa ha consolidado nuestra primera sede ATLAS MIAMI en los Estados Unidos permitiendo así ampliar nuestro mercado y nuestras posibilidades empresariales.
                </p>
                <hr  style=" height: 1px; background-color: #2f494a;"/>
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="font-forte-black text-center">MISIÓN</h2>
                        <p class="font-forte-paragraph text-justify">
                            Nuestra misión es crear un laso de honestidad y confianza con nuestros clientes, para consigo trabajar juntos en fin de la productividad de sus negocios, respaldados de la más alta calidad de nuestros servicios.
                        </p>
                        <p class="font-forte-paragraph text-justify">
                            La honestidad y la integridad nos permiten diferenciarnos en el mercado y nos contribuye para seguir siendo líderes a nivel nacional e internacional
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h2 class="font-forte-black text-center">VISIÓN</h2>
                        <p class="font-forte-paragraph text-justify">
                            Nuestras visión es basada en nuestra experiencia, y conocimiento del mercado, queremos convertirnos en la mejor empresa con más alta calidad de servicio a nivel nacional y extender nuestra capacidad de trabajo a todo sur américa.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="nav-backgroud-standard-black">
        <br/>
        <div class="container-fluid" id="products">
            <div class="row">
                <div class="col-md-7">
                    <h2 class="font-arial-atlas text-left" style="margin-left: 70px;">PRODUCTOS</h2>
                    <div class="row py-2">
                        <div class="col-md-6 offset-md-1">
                            <p class="white-forte-paragraph text-justify">✔ Frenos</p>
                            <p class="white-forte-paragraph text-justify">✔ Repuestos alternativos para Volvo</p>
                            <p class="white-forte-paragraph text-justify">✔ Repuestos alternativos Cummis</p>
                            <p class="white-forte-paragraph text-justify">✔ Repuestos alternativos Caterpillar</p>
                            <p class="white-forte-paragraph text-justify">✔ Tornilleria</p>
                            <p class="white-forte-paragraph text-justify">✔ Rodaje</p>
                            <p class="white-forte-paragraph text-justify">✔ Refrigeración</p>
                            <p class="white-forte-paragraph text-justify">✔ Piezas eléctricas</p>     
                        </div>
                        <div class="col-md-5" >
                            <p class="white-forte-paragraph text-justify">✔  Motor</p>
                            <p class="white-forte-paragraph text-justify">✔ Productos mantenimiento</p>
                            <p class="white-forte-paragraph text-justify">✔ Juntas y retenes</p>
                            <p class="white-forte-paragraph text-justify">✔ Hidráulica</p>
                            <p class="white-forte-paragraph text-justify">✔ Filtros</p>
                            <p class="white-forte-paragraph text-justify">✔ Desgaste</p>
                            <p class="white-forte-paragraph text-justify">✔ Chasis</p>
                            <p class="white-forte-paragraph text-justify">✔ Tren de potencia</p>  
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h2 class="font-arial-atlas text-left py-3" style="margin-left: 70px;">NUESTRAS MARCAS</h2>
                    <img class="card-img-top border-img"  src="{{ asset('images/brands_atlas.jpg')}}" alt="Card image cap">
                </div>
            </div>
            
            <div class="container-fluid py-2">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="font-arial-atlas text-center" style="margin-left: 70px;">GARANTÍA</h2>
                        <p class="white-forte-paragraph text-justify">ATLAS se distingue por ofrecer productos totalmente garantizados, los cuales son específicamente seleccionados por nuestros técnicos en conjunto con los más prestigiosos y reconocidos fabricantes de piezas a nivel mundial, creando así un lazo de confianza irrompible con nuestros clientes.</p>  
                    </div>
                </div>
            </div>
        </div>    
        <div class="py-3"></div>   
    </div>

    <div>
        <div class="row py-3">
            <div class="col-md-12" id="services">
                <h2 class="font-arial-atlas text-center">SERVICIOS</h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <h5 class="font-blue-black text-center" >Servicio de reparación y mantenimiento</h5>
                    <p class="font-forte-paragraph text-justify py-2">ATLAS cuenta con una amplia colaboración de talleres especializados, donde el conocimiento de manos expertas repararán los componentes que se necesiten con el fin de que sus máquinas se mantengan al 100% de rendimiento en el campo del trabajo. Nuestro grupo de labor ofrece el soporte necesario para su confiabilidad y le mantiene informado sobre el estado de reparación las 24 horas al día. ATLAS, con su modelo de trabajo, basado en altos estándares de calidad, le asegura a usted y a su máquina las perfectas condiciones de productividad y competitividad para su negocio.</p>
                </div>
                <div class="col-md-4">
                    <img class="border-img-service py-2"  src="{{ asset('images/card_1.jpg')}}" >
                </div>
            </div>
            <div class="container-fluid">
                <hr  style=" height: 1px; background-color: #2f494a; "/>
            </div>
            <div class="row py-2">
                <div class="col-md-4">
                    <img class="border-img-service py-2"  src="{{ asset('images/card_3.jpg')}}" >
                </div>
                <div class="col-md-8">
                    <h5 class="font-blue-black text-center" >Asesoramiento técnico</h5>
                    <p class="font-forte-paragraph text-justify py-2">Nuestro servicio Técnico y Post-Venta permite crear una relación estrecha con nuestro cliente, para compartir toda la información y todo el asesoramiento necesario en partes de recambio y de mantenimiento, asegurando una solución pronta a cualquier imprevisto o consulta técnica que sea requerida por parte del mismo. El equipo de trabajo de ATLAS está cualificado y supervisa constantemente la calidad de los suministros, proporcionando el mejor y más adecuado asesoramiento técnico para su correcta utilización.</p>
                </div>
            </div>
            <div class="container-fluid">
                <hr  style=" height: 1px; background-color: #2f494a; "/>
            </div>
            <div class="row py-2">
                <div class="col-md-8">
                    <h5 class="font-blue-black text-center" >Servicio de reparación y mantenimiento</h5>
                    <p class="font-forte-paragraph text-justify py-2">ATLAS cuenta con una amplia colaboración de talleres especializados, donde el conocimiento de manos expertas repararán los componentes que se necesiten con el fin de que sus máquinas se mantengan al 100% de rendimiento en el campo del trabajo. Nuestro grupo de labor ofrece el soporte necesario para su confiabilidad y le mantiene informado sobre el estado de reparación las 24 horas al día. ATLAS, con su modelo de trabajo, basado en altos estándares de calidad, le asegura a usted y a su máquina las perfectas condiciones de productividad y competitividad para su negocio.</p>
                </div>
                <div class="col-md-4">
                    <img class="border-img-service py-2"  src="{{ asset('images/card_1.jpg')}}" >
                </div>
            </div>
            <div class="container-fluid">
                <hr  style=" height: 1px; background-color: #2f494a; "/>
            </div>
            <div class="row py-2">
                <div class="col-md-6">
                    <h1 class="text-center">
                        <span class="font-blue-black text-center">Atención al cliente <i class="fa fa-headphones"></i></span>
                    </h1>
                    <p class="font-forte-paragraph text-justify py-2">ATLAS se encuentra a su disposición con un servicio de atención al cliente con profesionales del sector, buscando llegar a sus necesidades y que las mismas sean atendidas de inmediato, proporcionando asesoramiento e información eficaz para su empresa. Trabajamos de forma concreta, rápida y personalizada, ayudando a encontrar los repuestos requeridos. El departamento de ventas tiene disponibilidad directa a referencias con disponibilidad inmediata y le tendrán informado 24/7.</p>
                </div>
                <div class="col-md-6">
                    <h1 class="text-center">
                        <span class="font-blue-black text-center">Atención al cliente <i class="fa fa-paper-plane"></i></span>
                    </h1>
                    <p class="font-forte-paragraph text-justify py-2">Contamos con un grupo de trabajo especializado de logística para reafirmar y asegurar la calidad y rapidez de nuestro servicio, trabajando conjuntamente con las principales empresas de transporte nacional e internacional para lograr eficacia en la operación y brindarle lo mejor.</p>
                </div>
            </div>

        </div>
    </div>

    <div>
        <br/>
        <div class="container-fluid">
            <hr  style=" height: 1px; background-color: #2f494a; "/>
        </div>
        <div class="row" id="portfolio">
            <div class="container">
                <div class="col-md-12">
                    <h1 class="font-forte-black text-center">Contactanos para recibir una asesoria personalizada</h1>
                </div>
                <div class="col-md-12">



                    <form action="{{ route('customer_requests.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" id="inputEmail" class="form-control" name="email" required placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputName">Nombre</label>
                                <input type="text" id="inputName" class="form-control" name="name" required placeholder="Nombres y apellidos">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Ciudad</label>
                                <input type="text" id="inputCity" class="form-control" required name="city">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Dirección</label>
                                <input type="text" id="inputAddress" class="form-control" required name="address" placeholder="Calle 13 # 1234">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea">Mensaje</label>
                            <textarea class="form-control" required id="exampleFormControlTextarea" name="message" rows="2"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning" style="background: #009898">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
