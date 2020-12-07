@extends('layouts.admin.app')

@section('content')

    <div class="container">

        <div class="bg-white p-3 rounded-lg">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="placa">Placa</label>
                    <input type="number" class="form-control" id="placa" name="placa" value="{{ $vehiculos -> placa }}" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="color">Color</label>
                    <input type="text" class="form-control" id="color" name="color" value="{{ $vehiculos -> color }}" disabled>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="{{ $vehiculos -> marca }}" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="tipoVehiculo">Tipo de Vehiculo</label>
                    <input type="text" class="form-control" id="tipoVehiculo" name="tipoVehiculo" value="{{ $vehiculos -> tipoVehiculo }}" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="conductor">conductor</label>
                    <input type="text" class="form-control" id="conductor" name="conductor" value="{{ $vehiculos -> conductor }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="usuarios_id">Propietario</label>
                @foreach($usuarios as $usu)
                    @if($vh->usuarios_id == $usu->id)
                        <td>{{ $usu -> numeroCedula }}</td>
                    @endif
                @endforeach
            </div>
            <hr>
            <a href="{{ route('vehiculos.index') }}" class="btn btn-check mr-2"><i class="fas fa-arrow-circle-left"></i> &nbsp; VOLVER</a>
            <a href="{{ route('vehiculos.edit', $vehiculos -> id) }}" class="btn btn-edit ml-2">EDITAR &nbsp; <i class="fas fa-pen"></i></a>
        </div>

    </div>

@endsection

