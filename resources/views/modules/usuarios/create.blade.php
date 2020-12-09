@extends('layouts.admin.app')

@section('content')

    <div class="container">

        <form action="{{ route('usuarios.store') }}" method="POST" class="bg-white p-3 rounded-lg">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="numeroCedula">Numero de cedula</label>
                    <input type="number" class="form-control" id="numeroCedula" name="numeroCedula">
                </div>
                <div class="form-group col-md-6">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="primerNombre">Primer Nombre</label>
                    <input type="text" class="form-control" id="primerNombre" name="primerNombre">
                </div>
                <div class="form-group col-md-4">
                    <label for="segundoNombre">Segundo Nombre</label>
                    <input type="text" class="form-control" id="segundoNombre" name="segundoNombre">
                </div>
                <div class="form-group col-md-4">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion">
                </div>
                <div class="form-group col-md-6">
                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono">
                </div>
            </div>
            <div class="form-group">
                <label for="tipoUsuarios_id">Tipo de Usuario</label>
                <select class="custom-select" name="tipoUsuarios_id" id="tipoUsuarios_id">
                    <option value="">Seleccione...</option>
                    @foreach($tipo_usu as $i)
                        <option value="{{ $i -> id }}">{{ $i -> descTipoUsu }}</option>
                    @endforeach
                </select>
            </div>
            <hr>
            <a href="{{ route('usuarios.index') }}" class="btn btn-check mr-2"><i class="fas fa-arrow-circle-left"></i> &nbsp; VOLVER</a>
            <button type="submit" class="btn btn-add ml-2">CONFIRMAR &nbsp; <i class="fas fa-check-circle"></i></button>
        </form>

    </div>

@endsection
