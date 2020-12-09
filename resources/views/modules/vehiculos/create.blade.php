@extends('layouts.admin.app')

@section('content')

    <div class="container">

        <form action="{{ route('vehiculos.store') }}" method="POST" class="bg-white p-3 rounded-lg">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="placa">Placa</label>
                    <input type="" class="form-control" id="placa" name="placa">
                </div>
                <div class="form-group col-md-6">
                    <label for="color">Color</label>
                    <input type="text" class="form-control" id="color" name="color">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca">
                </div>
                <div class="form-group col-md-4">
                    <label for="tipoVehiculos_id">Tipo de Vehiculo</label>
                    <select name="tipoVehiculos_id" id="tipoVehiculos_id">
                        <option value="">Seleccione...</option>
                        @foreach($tipovehi as $vtype)
                            <option
                                value="{{$vtype->id}}">{{ $vtype -> descTipoVehiculos }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="usuario_con">Conductor</label>
                    <select name="usuario_con" id="usuario_con">
                        <option value="">Seleccione...</option>
                        @foreach($usuarios as $usu)
                            <option
                                value="{{$usu->id}}">{{ $usu -> primerNombre }} {{ $usu -> segundoNombre }} {{ $usu -> apellidos }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="usuario_pro">Propietario</label>
                <select name="usuario_pro" id="usuario_pro">
                    <option value="">Seleccione...</option>
                    @foreach($usuarios as $usu)
                        <option
                            value="{{$usu->id}}">{{ $usu -> primerNombre }} {{ $usu -> segundoNombre }} {{ $usu -> apellidos }}</option>
                    @endforeach
                </select>
            </div>

            <hr>
            <a href="{{ route('vehiculos.index') }}" class="btn btn-check mr-2"><i class="fas fa-arrow-circle-left"></i>
                &nbsp; VOLVER</a>
            <button type="submit" class="btn btn-add ml-2">CONFIRMAR &nbsp; <i class="fas fa-check-circle"></i></button>
        </form>

    </div>

@endsection
