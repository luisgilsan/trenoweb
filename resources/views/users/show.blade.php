@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Usuarios
                    @can('users.create', Model::class)
                    <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary float-right">
                        Crear
                    </a>    
                    @endcan
                </div>
                <div class="card-body">
                    <p><strong>Nombre</strong> {{ $user->name }} </p>
                    <p><strong>Correo Electronico</strong> {{ $user->email }} </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
