@extends('layouts.admin.app')

@section('content')

    <div class="container">
        <div class="row m-1">
            <div class="col-p1 m-3 bck-tab">
                <div class="table-responsive">
                    <div class="pt-3 pl-3 pr-3">
                        <h3><b>VEHICULOS</b></h3>
                    </div>
                    <div class="p-3">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th>PLACA</th>
                                <th>COLOR</th>
                                <th>MARCA</th>
                                <th>TIPO DE VEHICULO</th>
                                <th>CONDUCTOR</th>
                                <th>PROPIETARIO</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($vehiculos as $vh)
                                <tr>
                                    <td><a href="{{ route('vehiculos.show', $vh -> id) }}">{{ $vh -> placa }}</a></td>
                                    <td>{{ $vh -> color }}</td>
                                    <td>{{ $vh -> marca }}</td>

                                    @foreach($tipovehi as $vtype)
                                        @if($vtype->id == $vh->tipoVehiculos_id)
                                            <td>{{ $vtype -> descTipoVehiculos }}</td>
                                        @endif
                                    @endforeach

                                    @foreach($usuarios as $usu)
                                        @if($vh->usuario_con == $usu->id)
                                            <td>{{ $usu -> primerNombre }} {{ $usu -> apellidos }}</td>
                                        @endif
                                    @endforeach

                                    @foreach($usuarios as $usu)
                                        @if($vh->usuario_pro == $usu->id)
                                            <td>{{ $usu -> primerNombre }} {{ $usu -> apellidos }}</td>
                                        @endif
                                    @endforeach
                                    <td class="frm-delete">
                                        <form action="{{ route('vehiculos.delete', $vh -> id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link"><i
                                                    class="fas fa-user-times text-danger"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-p2 p-2 m-3 text-center bck-tab">
                <hr>
                <a class="btn btn-add btn-lg btn-block" href="{{ route('vehiculos.create') }}">AGREGAR &nbsp; <i
                        class="fas fa-plus-circle"></i></a>
                <hr>
            </div>
        </div>
    </div>

@endsection
