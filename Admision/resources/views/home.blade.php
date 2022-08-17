@extends('adminlte::page')

@section('title', 'Inicio')

@section('content')

    <div class="carousel-caption d-none d-md-block">
        <h1>Postula a la mejor universidad del norte del Perú</h1>
        <a href="{{ route('datos.create') }}" class="btn btn-primary">Postular</a>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/home.css">

@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
    <script>
        // JS code to change background-image of content-wrapper every 3 seconds using content from imagenes with animate
        var images = ['/imagenes/home1.jpg', '/imagenes/home3.jpg', '/imagenes/home5.jpg'];
    var current = 0;
    setInterval(function() {
        $('.content-wrapper').animate({opacity: 0}, 500, function() {
            $('.content-wrapper').css('background-image', 'url(' + images[current++] + ')');
            $('.content-wrapper').animate({opacity: 1}, 700);
            if (current >= images.length) current = 0;
        });
    }, 3000);
    </script>

@stop
