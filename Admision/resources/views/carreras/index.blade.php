@extends('adminlte::page')

@section('title', 'Carreras')


@section('content')


    <!--Solicitudes mostradas en cards-->
    <div class="container mt-5" >
        <div class="jumbotron">


            @foreach ($facultades as $facultad)
                <h1 class="text-center">{{ $facultad->nombre }}</h1>
                <div class="row">
                    @foreach ($facultad->carreras as $carrera)
                        <div class="col-md-4">
                            <div class="card  mb-4 " style="height: 95%">

                                <div class="card-body">
                                    <p class="card-text">
                                        <center>
                                            <h4>{{ $carrera->nombre }}</h4>
                                            {{ $carrera->descripcion }}
                                            <img class="card-img-top img-fluid" src="{{ $carrera->url }}" alt="">
                                        </center>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/carreras_index.css">
@stop
