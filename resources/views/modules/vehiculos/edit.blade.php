@extends('layouts.admin.app')

@section('content')

    <div class="container">

        <form action="{{ route('vehiculos.update', $vehiculos -> id) }}" method="POST" class="bg-white p-3 rounded-lg">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="placa">Placa</label>
                    <input type="text" class="form-control" id="placa" name="placa" value="{{ $vehiculos -> placa }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="color">Color</label>
                    <input type="text" class="form-control" id="color" name="color" value="{{ $vehiculos -> color }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="{{ $vehiculos -> marca }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="tipoVehiculo">Tipo de Vehiculo</label>
                    <input type="text" class="form-control" id="tipoVehiculo" name="tipoVehiculo" value="{{ $vehiculos -> tipoVehiculo }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="conductor">Conductor</label>
                    <input type="text" class="form-control" id="conductor" name="conductor" value="{{ $vehiculos -> conductor }}">
                </div>
            </div>
            <div class="form-group">
                <label for="usuarios_id">Propietario</label>
                <select class="custom-select" name="usuarios_id" id="usuarios_id">
                    <option value="">Seleccione...</option>
                    @foreach($usuarios as $usu)
                        <option
                            value="{{$usu->id}}">{{ $usu -> primerNombre }} {{ $usu -> segundoNombre }} {{ $usu -> apellidos }}</option>
                    @endforeach
                </select>
            </div>
            <hr>
            <a href="{{ route('vehiculos.index') }}" class="btn btn-check mr-2"><i class="fas fa-arrow-circle-left"></i> &nbsp; VOLVER</a>
            <button type="submit" class="btn btn-add ml-2">CONFIRMAR &nbsp; <i class="fas fa-check-circle"></i></button>
        </form>

    </div>

@endsection
