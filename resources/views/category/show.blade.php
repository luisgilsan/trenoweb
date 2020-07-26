@extends('layouts.app')

@section('content')
<div class="container margin-subview-atlas">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-treno">
                <div class="card-header">
                    <b class="font-bold-treno"> Categorias </b>
                    @can('category.create', Model::class)
                    <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary float-right">
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
                                <p>{{ $category->name }} </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"> 
                                <p><b class="font-bold-treno">Descripción:</b></p>
                            </div>
                            <div class="col-md-9"> 
                                <p>{{ $category->description }} </p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="offset-md-1 col-md-10">
                                        <img src=" {{ Storage::disk('public')->exists("images/categories/$name_image")  
                                        ? Storage::url("images/categories/$name_image") :
                                        asset('images/product_placeholder.png') }}" 
                                        alt="Imagen" class="img-fluid img-thumbnail">
                                    </div>
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
