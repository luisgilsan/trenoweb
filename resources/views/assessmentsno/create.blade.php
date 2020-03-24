@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-treno">
                <div class="card-body">
                    
                    {{-- {{ Form::open( ['route' => 'assessments.store']) }} --}}
                    <form action="{{ route('assessments.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('assessmentsno.form')
                    </form>
                    {{-- {{ Form::close() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection