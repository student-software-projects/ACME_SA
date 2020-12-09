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
                    <label for="tipoVehiculos_id">Tipo de Vehiculo</label>
                    <select class="custom-select" name="tipoVehiculos_id" id="tipoVehiculos_id">
                        @foreach($tipovehi as $vtype)
                            @if($vehiculos->tipoVehiculos_id == $vtype->id)
                                <option
                                    value="{{$vehiculos->tipoVehiculos_id}}">{{ $vtype -> descTipoVehiculos }}</option>
                            @endif
                        @endforeach
                        <option value="">----------------</option>
                        @foreach($tipovehi as $vtype)
                            <option
                                value="{{$vtype-> id}}">{{ $vtype -> descTipoVehiculos }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="usuario_con">Conductor</label>
                    <select class="custom-select" name="usuario_con" id="usuario_con">
                        @foreach($usuarios as $usu)
                            @if($vehiculos->usuario_con == $usu->id)
                                <option
                                    value="{{$vehiculos->usuario_con}}">{{ $usu -> primerNombre }} {{ $usu -> segundoNombre }} {{ $usu -> apellidos }}</option>
                            @endif
                        @endforeach
                        <option value="">----------------</option>
                        @foreach($usuarios as $usu)
                            @if($usu->tipoUsuarios_id == 1 OR $usu->tipoUsuarios_id == 3)
                                <option
                                    value="{{$usu->id}}">{{ $usu -> primerNombre }} {{ $usu -> segundoNombre }} {{ $usu -> apellidos }}</option>
                            @endif
                        @endforeach
                    </select>

                </div>
            </div>

            <div class="form-group">
                <label for="usuario_pro">Propietario</label>
                <select class="custom-select" name="usuario_pro" id="usuario_pro">
                    @foreach($usuarios as $usu)
                        @if($vehiculos->usuario_pro == $usu->id)
                            <option
                                value="{{$vehiculos->usuario_pro}}">{{ $usu -> primerNombre }} {{ $usu -> segundoNombre }} {{ $usu -> apellidos }}</option>
                        @endif
                    @endforeach
                    <option value="">----------------</option>
                    @foreach($usuarios as $usu)
                        @if($usu->tipoUsuarios_id == 2 OR $usu->tipoUsuarios_id == 3)
                            <option
                                value="{{$usu->id}}">{{ $usu -> primerNombre }} {{ $usu -> segundoNombre }} {{ $usu -> apellidos }}</option>
                        @endif
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
