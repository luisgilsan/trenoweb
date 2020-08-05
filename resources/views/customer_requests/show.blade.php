@extends('layouts.app')

@section('content')
<div class="container margin-subview-atlas">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-treno">
                <div class="card-header">
                    <b class="font-bold-treno">Solicitud</b>
                    {{-- @can('products.create', Model::class)
                    <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary float-right">
                        Crear
                    </a>    
                    @endcan --}}
                </div>
                <div class="card-body">
                    <div class="container">
                        {{-- $table->string('email',255); --}}
                        {{-- $table->string('name',255); --}}
                        {{-- $table->string('city',255)->nullable(); --}}
                        {{-- $table->string('address',255)->nullable();
                        $table->string('message',1024);
                        $table->enum('state', ['draft', 'read']); --}}
                        <div class="row">
                            <div class="col-md-2"> 
                                <p><b class="font-bold-treno">Cliente:</b></p>
                            </div>
                            <div class="col-md-10"> 
                                <p>{{ $customer_request->name }} </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"> 
                                <p><b class="font-bold-treno">E-mail:</b></p>
                            </div>
                            <div class="col-md-10"> 
                                <p>{{ $customer_request->email }} </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"> 
                                <p><b class="font-bold-treno">Teléfono:</b></p>
                            </div>
                            <div class="col-md-10"> 
                                <p>{{ $customer_request->phone }} </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"> 
                                <p><b class="font-bold-treno">Ciudad:</b></p>
                            </div>
                            <div class="col-md-10"> 
                                <p>{{ $customer_request->city }} </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"> 
                                <p><b class="font-bold-treno">Dirección:</b></p>
                            </div>
                            <div class="col-md-10"> 
                                <p>{{ $customer_request->address}} </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"> 
                                <p><b class="font-bold-treno">Mensaje:</b></p>
                            </div>
                            <div class="col-md-10"> 
                                <p>{{ $customer_request->message}} </p>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-2"> 
                                <p><b class="font-bold-treno">Estado:</b></p>
                            </div>
                            <div class="col-md-10"> 
                                <p>{{ $customer_request->state}} </p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
