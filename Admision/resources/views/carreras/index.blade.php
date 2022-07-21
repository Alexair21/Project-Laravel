@extends('adminlte::page')

@section('title', 'Carreras')


@section('content')


    <!--Solicitudes mostradas en cards-->
    <div class="container mt-5" >
        <div class="jumbotron bg-light">


            @foreach ($facultades as $facultad)
                <h1 class="text-center">{{ $facultad->nombre }}</h1>
                <div class="row">
                    @foreach ($facultad->carreras as $carrera)
                        <div class="col-md-4">
                            <div class="card bg-dark mb-4 shadow-lg" style="height: 95%">

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
