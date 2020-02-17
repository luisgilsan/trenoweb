@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                    <p><b class="font-bold-treno">Nombre:</b> {{ $product->name }} </p>
                    <p><b class="font-bold-treno">Descripción:</b> {{ $product->description }} </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
