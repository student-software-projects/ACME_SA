@extends('layouts.admin.app')

@section('content')

    <div class="container">

        <div class="bg-white p-3 rounded-lg">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="placa">Placa</label>
                    <input type="text" class="form-control" id="placa" name="placa" value="{{ $vehiculos -> placa }}"
                           disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="color">Color</label>
                    <input type="text" class="form-control" id="color" name="color" value="{{ $vehiculos -> color }}"
                           disabled>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="{{ $vehiculos -> marca }}"
                           disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="tipoVehiculos_id">Tipo de Vehiculo</label>
                    @foreach($tipovehi as $vtype)
                        @if($vtype->id == $vehiculos->tipoVehiculos_id)
                            <input type="text" class="form-control" id="tipoVehiculos_id" name="tipoVehiculos_id"
                                   value="{{ $vtype -> descTipoVehiculos }}" disabled>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="usuario_con">Conductor</label>
                    @foreach($usuarios as $usu)
                        @if($usu->id == $vehiculos->usuario_con)
                            <input type="text" class="form-control" id="usuario_con" name="usuario_con"
                                   value="{{ $usu -> primerNombre }} {{ $usu -> apellidos }}" disabled>
                        @endif
                    @endforeach
                </div>
                <div class="form-group col-md-6">
                    <label for="usuario_pro">Propietario</label>
                    @foreach($usuarios as $usu)
                        @if($usu->id == $vehiculos->usuario_pro)
                            <input type="text" class="form-control" id="usuario_pro" name="usuario_pro"
                                   value="{{ $usu -> primerNombre }} {{ $usu -> apellidos }}" disabled>
                        @endif
                    @endforeach
                </div>
            </div>
            <hr>
            <a href="{{ route('vehiculos.index') }}" class="btn btn-check mr-2"><i class="fas fa-arrow-circle-left"></i>
                &nbsp; VOLVER</a>
            <a href="{{ route('vehiculos.edit', $vehiculos -> id) }}" class="btn btn-edit ml-2">EDITAR &nbsp; <i
                    class="fas fa-pen"></i></a>
        </div>

    </div>

@endsection

