@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-treno">
                <div class="card-body">
                    {{ Form::model($user, ['route' => ['users.update', $user->id], 
                    'method' => 'PUT']) }}

                        @include('users.form')

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
