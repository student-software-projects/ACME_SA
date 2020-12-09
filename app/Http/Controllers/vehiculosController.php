<?php

namespace App\Http\Controllers;

use App\Models\tipoVehiculos;
use App\Models\usuarios;
use App\Models\vehiculos;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class vehiculosController extends Controller
{
    public function index(){
        $vehiculos = vehiculos::all();
        $usuarios = usuarios::all();
        $tipovehi = tipoVehiculos::all();
        return view('modules.vehiculos.index', compact('vehiculos','usuarios','tipovehi'));
    }

    public function show($id){
        $vehiculos = vehiculos::find($id);
        $tipovehi = tipoVehiculos::all();
        $usuarios = usuarios::all();
        return view('modules.vehiculos.show', compact('vehiculos','tipovehi','usuarios'));
    }

    public function create(){
        $usuarios = usuarios::all();
        $tipovehi = tipoVehiculos::all();
        return view('modules.vehiculos.create',compact('usuarios'), compact('tipovehi'));
    }

    public function store (Request $request){

        $vehiculos = vehiculos::create($request->all());
        return redirect()->route('vehiculos.index');

    }

    public function edit ($id){
        $vehiculos = vehiculos::find($id);
        $usuarios = usuarios::all();
        $tipovehi = tipoVehiculos::all();
        return view('modules.vehiculos.edit', compact('vehiculos','usuarios','tipovehi'));
    }

    public function update(Request $request, $id){
        $vehiculos = vehiculos::find($id)->update($request->all());
        return redirect()->route('vehiculos.index');
    }

    public function delete($id){
        $vehiculo = vehiculos::find($id)->delete();
        return redirect()->route('vehiculos.index');
    }
}
