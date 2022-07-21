@extends('adminlte::page')

@section('title', 'Registro')


@section('content')



    <div class="container fluid">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" id="formulario">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4" id="titulo">Registro de datos</h1>
                                    </div>
                                    <form action="{{ route('datos.store') }}" method="POST" class="user"
                                        enctype="multipart/form-data">
                                        @csrf


                                        <div class="form-row">
                                            <div class=" col">
                                                <select name="tipo_documento_id" id="" class="form-control">
                                                    <option value="">Tipo Documentos</option>
                                                    @foreach ($tipos_documentos as $tipo_documento)
                                                        <option value="{{ $tipo_documento->id }}">
                                                            {{ $tipo_documento->descripcion }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class=" col">
                                                <input class="form-control form-control-user"
                                                    placeholder="Número de documento" type="text" name="dni"
                                                    id="">
                                            </div>
                                            <div> </div>
                                        </div>

                                        <br>

                                        <div class="form-group">
                                            <input class="form-control form-control-user" placeholder="Apellidos y Nombres"
                                                type="text" name="apellidos_nombres" id="">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control form-control-user" placeholder="Dirección"
                                                type="text" name="direccion" id="">
                                        </div>


                                        <div class="form-group">
                                            <input class="form-control form-control-user" placeholder="Fecha de nacimiento"
                                                type="date" name="fecha_nacimiento" id="">
                                        </div>

                                        <div class="form-row">
                                            <div class="custom-file col">
                                                <input type="file" class="custom-file-input" id=""
                                                    name="imagen">
                                                <label class="custom-file-label" for="customFile">Foto</label>
                                            </div>


                                            <div class="form-group col">
                                                <select name="sexo_id" id="" class="form-control">
                                                    <option value="">Genero</option>
                                                    @foreach ($sexos as $sexo)
                                                        <option value="{{ $sexo->id }}">{{ $sexo->descripcion }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <input class="form-control form-control-user" placeholder="Nacionalidad"
                                                type="text" name="nacionalidad" id="">
                                        </div>


                                        <div class="form-group">
                                            <input class="form-control form-control-user" placeholder="Teléfono"
                                                type="text" name="telefono" id="">
                                        </div>


                                        <div class="form-group">
                                            <input class="form-control form-control-user" placeholder="Email" type="email"
                                                name="email" id="">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Registrar
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/style.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
