@extends('layouts.app')

<!-- Scripts -->
@section('scritpsPage')
<link rel="stylesheet"  href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<script src="{{ asset('js/app.js') }}" defer></script>
<style>
    .btn-buy-treno {
        font-size: 100%;
        font-weight: bold;
        color: rgba(0, 176, 255, 1);
        border-color: rgba(0, 176, 255, 1);
        background-color: #ffffff;
        transition: color .5s, background-color 0.8s;
    }

    


    .btn-buy-treno:hover {
        color: #ffffff;
        /* background-color: #e3342f; */
        background-color: rgba(0, 176, 255, 1);
    }

    .card-sale-treno {
        background-color: rgba(230, 230, 230, 0.8);
        
        /* background-color: #e6e6e6;  */
        border-color:#00b0ff; 
        border-width: 3px;
    }

    .card-produc-treno{
        background-color: rgba(230, 230, 230, 0.4);
        border-color:#ffffff; 
        border-width: 1px;
    }

    .text-product-sale{
        font-size: 140%;
    }

    .text-price-sale{
        font-size: 180%;
        color:#00b0ff; 
    }

    </style>
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-sale-treno">
                <div class="card-header">
                    Productos
                    @can('products.create', Model::class)
                    <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary float-right">
                        Añadir stock 
                    </a>    
                    @endcan
                </div>
                <div class="card-body">
                    <div class="container">
                    @php
                    $index = 0;
                    $size = count($products);
                    @endphp

                    @while ($index < $size)
                        <div class="row">  
                            @for ($i = 0; $i < 3; $i++)
                                @if ($index < $size)
                                    <div class="col-md-4"> 
                                        <div class="card card-produc-treno" >
                                            <img class="card-img-top" src="{{  asset('images/product_placeholder.png') }}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title text-product-sale"> {{ $products[$index]->name }} </h5>
                                                <p class="card-text text-price-sale"> $ {{ $products[$index]->sale_price }} .</p>
                                            </div>
                                            <a href="#" class="btn btn-sm fas fa-cart-arrow-down col-md-12 list-group-item btn-buy-treno" >
                                                Agregar al carrito 
                                            </a>
                                        </div>
                                    </div>

                                    @php
                                        $index = $index +1;
                                    @endphp
                                @endif
                            @endfor
                        </div> 
                        <br/>
                    @endwhile
                </div>


                    {{ $products->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
