@extends('adminlte::page')

@section('title', 'Postulantes')


@section('content')

    <!--Solicitudes mostradas en cards-->
    <div class="container mt-5">

        <div class="jumbotron">
            <h1 class="display-4">Postulantes</h1>
            <hr class="my-4">


            <div class="row">
                @foreach ($datos as $dato)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top img-fluid" src="{{ asset($dato->imagen) }}"
                                alt="{{ $dato->apellidos_nombres }}" width="100px" height="100px">
                            <div class="card-body" >
                                <b>
                                    <p class="card-text">{{ $dato->apellidos_nombres }}</p>
                                </b>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target=".dato-{{ $dato->id }}">
                                    Información
                                </button>

                                <form action="{{ route('datos.destroy', $dato->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn btn-danger"
                                        onclick="return confirm('¿Desea eliminar esta unidad?')">Eliminar</button>
                                </form>






                                <!-- Modal -->
                                <div class="modal fade dato-{{ $dato->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" id="a">

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <img class="card-img-top img-fluid" src="{{ asset($dato->imagen) }}"
                                                        alt="{{ $dato->apellidos_nombres }}" width="500px" height="500px">

                                                    <center>
                                                        <b>
                                                            <p class="card-text">{{ $dato->apellidos_nombres }}</p>
                                                        </b>
                                                    </center>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="modal-body"">
                                                        <h6> <b>Tipo de documento:</b>
                                                            {{ $dato->tipoDocumento->descripcion }}</h6>
                                                        <h6> <b>Número de documento:</b>
                                                            {{ $dato->dni }}</h6>
                                                        <h6> <b>Apellidos y Nombres:</b>
                                                            {{ $dato->apellidos_nombres }}</h6>
                                                        <h6> <b>Dirección:</b>
                                                            {{ $dato->direccion }}</h6>
                                                        <h6> <b>Teléfono:</b>
                                                            {{ $dato->telefono }}</h6>
                                                        <h6> <b>Email:</b>
                                                            {{ $dato->email }}</h6>
                                                        <h6> <b>Fecha de nacimiento:</b>
                                                            {{ $dato->fecha_nacimiento }}</h6>
                                                        <h6> <b>Nacionalidad:</b>
                                                            {{ $dato->nacionalidad }}</h6>
                                                        <h6> <b>Sexo:</b>
                                                            {{ $dato->sexo->descripcion }}</h6>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/index.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
