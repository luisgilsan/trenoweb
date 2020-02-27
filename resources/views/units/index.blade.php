@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-treno" >
                <div class="card-header">
                    Valoraciones
                    @can('unit.create', Model::class)
                    <a href="{{ route('units.create') }}" class="btn btn-sm btn-primary float-right">
                        Agregar
                    </a> 
                    <a href="{{ route('assessments.create') }}" class="btn btn-sm btn-success float-right">
                        Ajustar unidades
                    </a>     
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                {{-- <th width="5%">ID</th> --}}
                                <th>Nombre</th>
                                <th>Prefijo</th>
                                <th>Activo</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($units as $unit)
                                <tr>
                                    <td>{{ $unit->name }}</td>
                                    <td>{{ $unit->prefix }}</td>
                                    <td>{{ $unit->active }}</td>
                                    <td>
                                        @can('unit.show')
                                            <a  href="{{ route('units.show', $unit->id) }}" 
                                                class="btn btn-sm btn-success">
                                                Ver
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('unit.edit')
                                            <a  href="{{ route('units.edit', $unit->id) }}" 
                                                class="btn btn-sm btn-success">
                                                Editar
                                            </a>
                                        @endcan
                                    </td>

                                    <td>
                                        @can('unit.destroy')
                                            {!! Form::open (
                                                ['route' => ['units.destroy', $unit->id],
                                                'method' => 'DELETE'])!!}
                                                <button class="btn btn-sm btn-danger">
                                                    Eliminar
                                                </button>
                                            {!! Form::close() !!}    
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody> 
                    </table>
                    {{ $units->render() }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
