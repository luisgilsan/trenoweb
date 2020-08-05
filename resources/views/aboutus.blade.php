@extends('layouts.principal')


<style>

</style>

<script>
    // $('.carousel').carousel({
    //     interval: 300});
</script>

@section('content')    

    <div class="container py-5">
        <hr  style=" height: 1px; background-color: #2f494a;"/>
    </div>
    <div class="container-fluid" >
        <div class="row" id="aboutus">
            <div class="col-md-12">
                <div class="rounded-div" style="background-color: #05bbaf; border-radius: 0px 0px 12px 12px !important;">
                    <p class="menu-white-atlas text-center py-3">¿QUIENES SOMOS?</p>
                </div>
                <div class="tip-rounded-div" style="border-top: 40px solid #05bbaf;"> </div>
                <p class="paragraph-black-atlas text-justify py-2">ATLAS es una empresa dedicada al suministro de repuestos y productos de mantenimiento para todo tipo de maquinaria de obras públicas y agrícola.
                </p>
                <p class="paragraph-black-atlas text-justify">Contamos con una amplia base de referencias disponibles para nuestros clientes, con la mayor información especializada y clara de cada producto, asegurándonos así de dar el mejor servicio personalizado a cada uno de nuestros consumidores. Una empresa con ambición al progreso, dedicada a la mejora de su servicio, prometiendo de esta manera una excelencia en agilidad, calidad y acompañamiento. 
                </p>
                <p class="paragraph-black-atlas text-justify">Para ATLAS es prioridad el tiempo, ya que se es consciente en la importancia para la productividad de nuestros clientes, por eso fortalecemos nuestra rapidez día a día con tecnología y nuevos métodos de logística para así incrementar tu productividad y la nuestra.
                </p>
                <p class="paragraph-black-atlas text-justify">ATLAS es tan en un proceso interminable de expansión, con fin de establecer estrategias internacionales que nos permitan incrementar nuestras redes comerciales en el exterior. La dimensión internacional alcanzada por la empresa ha consolidado nuestra primera sede ATLAS MIAMI en los Estados Unidos permitiendo así ampliar nuestro mercado y nuestras posibilidades empresariales.
                </p>
            </div>
            <hr  style=" height: 1px; background-color: #2f494a;"/>
            <div class="row">
                <div class="col-md-6">
                    <div class="rounded-div" style="background-color: #bf9721; border-radius: 0px 0px 12px 12px !important;">
                        <p class="menu-white-atlas text-center py-3">MISIÓN</p>
                    </div>
                    <div class="tip-rounded-div" style="border-top: 40px solid #bf9721;"> </div>
                    <p class="paragraph-black-atlas text-justify">
                        Nuestra misión es crear un laso de honestidad y confianza con nuestros clientes, para consigo trabajar juntos en fin de la productividad de sus negocios, respaldados de la más alta calidad de nuestros servicios.
                    </p>
                    <p class="paragraph-black-atlas text-justify">
                        La honestidad y la integridad nos permiten diferenciarnos en el mercado y nos contribuye para seguir siendo líderes a nivel nacional e internacional
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="rounded-div" style=" border-radius: 0px 0px 12px 12px !important;">
                        <p class="menu-white-atlas text-center py-3">VISIÓN</p>
                    </div>
                    <div class="tip-rounded-div"> </div>

                    <p class="paragraph-black-atlas text-justify">
                        Nuestras visión es basada en nuestra experiencia, y conocimiento del mercado, queremos convertirnos en la mejor empresa con más alta calidad de servicio a nivel nacional y extender nuestra capacidad de trabajo a todo sur américa.
                    </p>
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
