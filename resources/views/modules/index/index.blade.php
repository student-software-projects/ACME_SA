@extends('layouts.index.app')

@section('content')

    <div class="container">
        <div class="m-3 bck-tab in">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <a href="{{ route('usuarios.index') }}">
                            <img src="https://previews.123rf.com/images/pressmaster/pressmaster0810/pressmaster081000374/3716878-vertical-de-la-imagen-de-las-personas-que-interact%C3%BAan-juntos-en-reuni%C3%B3n.jpg" alt="">
                            <div class="text">
                                Usuarios
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <a href="{{ route('vehiculos.index') }}">
                            <img src="https://www.volvochile.cl/wp-content/uploads/2020/02/Volvo_FH_Europa_2.jpg" alt="">
                            <div class="text">
                                Vehiculos
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <a href="{{ route('reporte.index') }}">
                            <img src="https://www.comunicarseweb.com/sites/default/files/styles/galeria_noticias/public/pages/kcm-reporte-banner.jpg?itok=CnXQiD47" alt="">
                            <div class="text">
                                Reportes
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
