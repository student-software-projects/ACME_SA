<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use App\Models\vehiculos;
use Illuminate\Http\Request;

class vehiculosController extends Controller
{
    public function index(){
        $vehiculos = vehiculos::all();
        $usuarios = usuarios::all();
        return view('modules.vehiculos.index', compact('vehiculos'), compact('usuarios'));
    }

    public function show($id){
        $vehiculos = vehiculos::find($id);
        return view('modules.vehiculos.show', compact('vehiculos'));
    }

    public function create(){
        $usuarios = usuarios::all();
        return view('modules.vehiculos.create',compact('usuarios'));
    }

    public function store (Request $request){
        $vehiculos = vehiculos::create($request->all());
        return redirect()->route('vehiculos.index');
    }

    public function edit ($id){
        $vehiculos = vehiculos::find($id);
        $usuarios = usuarios::all();
        return view('modules.vehiculos.edit', compact('vehiculos'), compact('usuarios'));
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
