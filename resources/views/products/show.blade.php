@extends('layouts.app')

@section('content')
<div class="container  margin-subview-atlas">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-treno">
                <div class="card-header">
                    <b class="font-bold-treno"> Productos </b>
                    @can('products.create', Model::class)
                    <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary float-right">
                        Crear
                    </a>    
                    @endcan
                </div>
                <div class="card-body">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-3"> 
                                <p><b class="font-bold-treno">Nombre:</b></p>
                            </div>
                            <div class="col-md-9"> 
                                <p>{{ $product->name }} </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"> 
                                <p><b class="font-bold-treno">Descripción:</b></p>
                            </div>
                            <div class="col-md-9"> 
                                <p>{{ $product->description }} </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"> 
                                <p><b class="font-bold-treno">Descripción de venta:</b></p>
                            </div>
                            <div class="col-md-9"> 
                                <p>{{ $product->sale_description }} </p>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-md-6"> 
                                <div class="row">
                                    <div class="col-md-8"> 
                                        <p><b class="font-bold-treno">Costo:</b></p>
                                    </div>
                                    <div class="col-md-4"> 
                                        <p>$ {{ $product->cost }} </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8"> 
                                        <p><b class="font-bold-treno">Precio de venta:</b></p>
                                    </div>
                                    <div class="col-md-4"> 
                                        <p>$ {{ $product->sale_price }} </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8"> 
                                        <p><b class="font-bold-treno">Ficha técnica:</b></p>
                                    </div>
                                    <div class="col-md-4"> 
                                        <p>{{ $product->data_sheet_id }} </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8"> 
                                        <p><b class="font-bold-treno">Modelo:</b></p>
                                    </div>
                                    <div class="col-md-4"> 
                                        <p>{{ $product->model }} </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8"> 
                                        <p><b class="font-bold-treno">Codigo:</b></p>
                                    </div>
                                    <div class="col-md-4"> 
                                        <p>{{ $product->code }} </p>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="offset-md-1 col-md-10">
                                        <img src=" {{ Storage::disk('public')->exists("images/products/$name_image")  
                                        ? Storage::url("images/products/$name_image") :
                                        asset('images/product_placeholder.png') }}" 
                                        alt="Imagen" class="img-fluid img-thumbnail" >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-md-0 col-md-2"> 
                                <p><b class="font-bold-treno">En venta:</b></p>
                            </div>
                            <div class="col-md-1"> 
                                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                    <input name="for_sale" type="checkbox" class="custom-control-input" id="checkSale" value="1" {{$product->for_sale ? 'checked' : ''}}  onclick="return false;">
                                    <label class="custom-control-label" for="checkSale"></label>
                                </div>
                            </div>
                            <div class="col-md-2"> 
                                <p><b class="font-bold-treno">En descuento:</b></p>
                            </div>
                            <div class="col-md-1"> 
                                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="checkDiscount" value="1" {{$product->discount ? 'checked' : ''}} onclick="return false;">
                                    <label class="custom-control-label" for="checkDiscount"></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
