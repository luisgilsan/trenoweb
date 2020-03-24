@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-treno" >
                <div class="card-header">
                    Valoraciones
                    @can('assessment.create', Model::class)
                    <a href="{{ route('assessments.create') }}" class="btn btn-sm btn-primary float-right">
                        Agregar
                    </a> 
                    <a href="{{ route('units.index') }}" class="btn btn-sm btn-success float-right">
                        Ajustar unidades
                    </a>     
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                {{-- <th width="5%">ID</th> --}}
                                <th>Asesor</th>
                                <th>Usuario</th>
                                <th>Fecha del reporte</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assessments as $assessment)
                                <tr>
                                    {{-- <td>{{ $assessment->id }}</td> --}}
                                    <td>{{ $assessment->UserAssessor->name }}</td>
                                    <td>{{ $assessment->UserCustomer->name }}</td>
                                    <td>{{ $assessment->measurement_date }}</td>
                                    <td>
                                        @can('assessment.show')
                                            <a  href="{{ route('assessments.show', $assessment->id) }}" 
                                                class="btn btn-sm btn-success">
                                                Ver
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('assessment.edit')
                                            <a  href="{{ route('assessments.edit', $assessment->id) }}" 
                                                class="btn btn-sm btn-success">
                                                Editar
                                            </a>
                                        @endcan
                                    </td>

                                    <td>
                                        @can('assessment.destroy')
                                            {!! Form::open (
                                                ['route' => ['assessments.destroy', $assessment->id],
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
                    {{ $assessments->render() }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
