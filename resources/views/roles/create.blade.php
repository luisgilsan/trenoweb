@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-treno">
                <div class="card-body">
                    
                    {{ Form::open( ['route' => 'roles.store']) }}
                         @include('roles.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
