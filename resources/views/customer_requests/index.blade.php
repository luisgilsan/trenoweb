@extends('layouts.app')

@section('content')
<div class="container margin-subview-atlas">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card " >
                <div class="card-header">
                    Solicitudes
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nombre cliente</th>
                                {{-- <th>Estado</th> --}}
                                <th>Email</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lines as $line)
                                <tr>
                                    <td>{{ $line->name }}</td>
                                    {{-- <td>{{ $line->state }}</td> --}}
                                    <td>{{ $line->email }}</td>
                                    <td>
                                        @can('customer_requests.show')
                                            <a  href="{{ route('customer_requests.show', $line->id) }}" 
                                                class="btn btn-sm btn-warning">
                                                Ver
                                            </a>
                                        @endcan
                                    </td>
                                    {{-- <td>
                                        @can('customer_requests.edit')
                                            <a  href="{{ route('customer_requests.edit', $line->id) }}" 
                                                class="btn btn-sm btn-warning">
                                                Editar
                                            </a>
                                        @endcan
                                    </td> --}}

                                    <td>
                                        @can('customer_requests.destroy')
                                            {!! Form::open (
                                                ['route' => ['customer_requests.destroy', $line->id],
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
                    {{ $lines->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
