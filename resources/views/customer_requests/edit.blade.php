@extends('layouts.app')

@section('stylesPlugin')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="{{ asset("js/bootstrap-fileinput/css/fileinput.css") }}" media="all" rel="stylesheet" type="text/css"/> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
        <link href="{{ asset("js/bootstrap-fileinput/themes/explorer-fas/theme.css") }}" media="all" rel="stylesheet" type="text/css"/> 
@endsection 

@section('extraScritps')
    <script src="{{ asset('js/picture.js')}}" type="text/javascript"></script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-treno">
                <div class="card-header">
                    <b class="font-bold-treno"> Productos </b>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.update', $product->id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">                    
                        @csrf
                        @method('PUT')
                        @include('products.editform')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
