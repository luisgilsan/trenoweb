@extends('layouts.app')


<style>
.links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}

.content {
            text-align: center;
        }


.title {
        font-size: 84px;
        color: #ff6b6f;
    }

    .m-b-md {
        margin-bottom: 30px;
        margin-top: 100px;
    }

</style>

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Bienvenido a Valery!
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Maquillaje</a>
            <a href="https://laracasts.com">Accesorios</a>
            <a href="https://laravel-news.com">Perfumeria</a>
            <a href="https://blog.laravel.com">Hogar</a>
            <a href="https://nova.laravel.com">Retail</a>
            <a href="https://forge.laravel.com">Suplementos</a>
        </div>
    </div>
@endsection
