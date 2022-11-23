@extends('layouts.main')

@section('title')
    registro
@endsection

@section('style')
@endsection

@section('navbar')
@endsection


@section('content')
    <div class="d-flex vhmax centrado bg-dark">
        <div class="container-md bg-light rounded">
            <div class="row">
                <div class="col-12 text-center bg-intech">
                    <h2 class="text-white">Registro Titular</h2>
                </div>
                <form action="/register" method="POST">
                    @csrf
                    <div class="col-12">
                        <div class="centrado_select m-2 mb-3">
                            <div class="column">
                                <label for="usu_nombres" class="form-label">Nombres</label>
                                <input type="text" class="form-control" id="usu_nombres" name="usu_nombres">
                            </div>
                            <div class="column">
                                <label for="usu_apellidos" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="usu_apellidos" name="usu_apellidos">
                            </div>
                            <div class="column">
                                <label for="usu_correo" class="form-label">Correo</label>
                                <input type="email" class="form-control" id="usu_correo" name="usu_correo">
                            </div>
                            <div class="column">
                                <label for="usu_contrasena" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="usu_contrasena" name="usu_contrasena">
                            </div>
                            <div class="column">
                                <label for="usu_confirmar_contrasena" class="form-label">Confirmar contraseña</label>
                                <input type="password" class="form-control" id="usu_confirmar_contrasena" name="usu_confirmar_contrasena">
                            </div>
                            <div class="column">
                                <label for="usu_cedula" class="form-label">Cedula</label>
                                <input type="text" class="form-control" id="usu_cedula" name="usu_cedula">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <div class="container m-2">
                            <button type="submit" class="btn-custom blue" style="width: 20rem">Registrarse</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection



    @section('footer')
    @endsection


    @section('scrpit')
    @endsection
