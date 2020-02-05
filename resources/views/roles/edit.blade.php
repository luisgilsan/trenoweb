@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="panel-heading">Role</div> --}}
                <div class="card-body">
                    {{ Form::model($role, ['route' => ['roles.update', $role->id], 
                    'method' => 'PUT']) }}

                        @include('roles.form')

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
