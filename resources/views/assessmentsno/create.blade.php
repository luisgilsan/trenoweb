@extends('layouts.app')

    {{-- @section("stylesPlugin")
    <link href="{{asset("js/bootstrap-fileinput/css/fileinput.min.css")}}" rel="stylesheet" type="text/css"/>
    @endsection --}}

    @section('stylesPlugin')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="{{ asset("js/bootstrap-fileinput/css/fileinput.css") }}" media="all" rel="stylesheet" type="text/css"/> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
        <link href="{{ asset("js/bootstrap-fileinput/themes/explorer-fas/theme.css") }}" media="all" rel="stylesheet" type="text/css"/> 
    @endsection 

    @section('scritpsPage')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> 
    <script src="{{ asset('js/bootstrap-fileinput//js/plugins/piexif.js')}}" type="text/javascript"></script>  
    <script src="{{ asset('js/bootstrap-fileinput/js/plugins/sortable.js')}}" type="text/javascript"></script> 
    <script src="{{ asset('js/bootstrap-fileinput/js/fileinput.js')}}" type="text/javascript"></script> 
    <script src="{{ asset('js/bootstrap-fileinput/js/locales/fr.js')}}" type="text/javascript"></script> 
    <script src="{{ asset('js/bootstrap-fileinput/js/locales/es.js')}}" type="text/javascript"></script> 
    <script src="{{ asset('js/bootstrap-fileinput/themes/fas/theme.js')}}" type="text/javascript"></script> 
    <script src="{{ asset('js/bootstrap-fileinput/themes/explorer-fas/theme.js')}}" type="text/javascript"></script> 
    @endsection 

    @section('extraScritps')
    <script src="{{ asset('js/picture.js')}}" type="text/javascript"></script>
    @endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-treno">
                <div class="card-body">
                    <form action="{{ route('assessments.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('assessmentsno.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


