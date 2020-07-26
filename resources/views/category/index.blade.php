@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row margin-subview-atlas">
        <div class="col-md-12">
            <div class="card card-treno" >
                <div class="card-header">
                    Categorias
                    @can('category.create', Model::class)
                    <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary float-right">
                        Crear
                    </a>    
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        @can('category.show')
                                            <a  href="{{ route('category.show', $category->id) }}" 
                                                class="btn btn-sm btn-warning">
                                                Ver
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('category.edit')
                                            <a  href="{{ route('category.edit', $category->id) }}" 
                                                class="btn btn-sm btn-warning">
                                                Editar
                                            </a>
                                        @endcan
                                    </td>

                                    <td>
                                        {{-- @can('category.destroy') --}}
                                            {{ Form::open (   
                                                ['route' => ['category.destroy', $category->id],
                                                'method' => 'DELETE'])}}
                                                @csrf
                                                <button class="btn btn-sm btn-danger">
                                                    Eliminar
                                                </button>
                                            {{ Form::close() }}

                                        {{-- @endcan --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody> 
                    </table>
                    {{ $categories->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
