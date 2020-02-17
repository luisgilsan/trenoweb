@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-treno">
                <div class="card-header">
                    Role
                    @can('roles.create', Model::class)
                    <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary float-right">
                        Crear
                    </a>    
                    @endcan
                </div>
                <div class="card-body">
                    <p><strong>Nombre</strong> {{ $role->name }} </p>
                    <p><strong>Slug</strong> {{ $role->slug }} </p>
                    <p><strong>Descripción</strong> {{ $role->description }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
