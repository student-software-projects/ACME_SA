<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use App\Models\vehiculos;

class reportesController extends Controller
{
    public function reporte(){

        $usuarios=usuarios::all();
        $vehiculos=vehiculos::all();
        return view('modules.reportes.reporte', compact('usuarios', 'vehiculos'));

    }
}
