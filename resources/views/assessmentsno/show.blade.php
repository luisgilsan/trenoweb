@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-treno">
                <div class="card-header">
                    <b class="font-bold-treno"> Valoración </b>
                    @can('products.create', Model::class)
                    <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary float-right">
                        Crear
                    </a>    
                    @endcan
                </div>
                <div class="card-body">
                    <p><b class="font-bold-treno">Asesor:</b> 
                        <a  href="{{ route('users.show', $assessment->UserAssessor->id) }}">                        
                        {{ $assessment->UserAssessor->name }} 
                        </a>
                    </p>
                    <p><b class="font-bold-treno">Usuario:</b> 
                        <a  href="{{ route('users.show', $assessment->UserCustomer->id) }}">                        
                            {{ $assessment->UserCustomer->name }} 
                        </a>                        
                    </p>
                    <p><b class="font-bold-treno">Fecha de la sesión:</b> {{ $assessment->measurement_date}} </p>
                    <p><b class="font-bold-treno">Evidencias:</b> {{ $assessment->image}}</p>

                    <div class="col-6">
                        <img src=" {{ Storage::disk('public')->exists("images/assessment/$name_image")  
                        ? Storage::url("images/assessment/$name_image") :
                        asset('images/product_placeholder.png') }}" 
                        alt="Imagen" class="img-fluid img-thumbnail" >
                    </div>
                    

                    {{-- <p><b class="font-bold-treno">Ruta:</b> {{ Storage::disk('public')->exists('file.jpg'); }}</p> --}}                               
                                                                {{-- Storage::get('file.jpg') --}}
                                                                 {{-- Storage::get("images/assessment/$assessment->image") --}}

                    {{-- <img src="{{Storage::get("images/assessment/$assessment->image")}}" alt="Fotos del evento"> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection