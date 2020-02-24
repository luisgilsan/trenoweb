@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-treno">
                <div class="card-body">
                    
                    {{ Form::open( ['route' => 'assessments.store']) }}
                         @include('assessments.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
