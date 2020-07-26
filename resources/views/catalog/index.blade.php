@extends('layouts.app')

<!-- Scripts -->
@section('scritpsPage')
<style>
    .btn-buy-treno {
        font-size: 100%;
        font-weight: bold;
        color: rgba(167, 75, 165,1);
        border-color: rgba(167, 75, 165,1);
        background-color: #ffffff;
        transition: color .5s, background-color 0.8s;
    }

    .btn-buy-treno:hover {
        color: #ffffff;
        /* background-color: rgba(0, 176, 255, 1); */
        background-color: rgba(167, 75, 165,1);
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
        font-size: 120%;
        color: rgba(167, 75, 165,1);
    }

    </style>
@endsection

@section('content')

<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-treno">
                <div class="card-header">
                    {{-- Productos
                    @can('products.create', Model::class)
                    <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary float-right">
                        Añadir stock 
                    </a>    
                    @endcan --}}
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

                                            @php
                                                $name_image = $products[$index]->picture ? $products[$index]->picture : 'none';    
                                            @endphp


                                            <img class="card-img-top"   src="{{ Storage::disk('public')->exists("images/products/$name_image")  
                                            ? Storage::url("images/products/$name_image") :
                                            asset('images/product_placeholder.png') }}" 
                                            alt="Imagen" class="img-fluid img-thumbnail" >

                                            <div class="card-body text-center">
                                                <h5 class="card-title text-product-sale"> {{ $products[$index]->name }} </h5>
                                                <p class="card-text text-price-sale"> $ {{ $products[$index]->sale_price }} .</p>
                                            </div>
                                            {{-- <a href="#" class="btn btn-sm fas fa-cart-arrow-down col-md-12 list-group-item btn-buy-treno" >
                                                Agregar al carrito 
                                            </a> --}}
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
