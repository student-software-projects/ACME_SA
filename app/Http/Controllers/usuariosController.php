<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;
use App\Models\tipoUsuarios;

class usuariosController extends Controller
{
    //

    public function index()
    {
        $usuarios = usuarios::all();
        $tipo_usu = tipoUsuarios::all();
        return view('modules.usuarios.index', compact('usuarios', 'tipo_usu'));
    }

    public function create()
    {
        $usuarios = usuarios::all();
        $tipo_usu = tipoUsuarios::all();
        return view('modules.usuarios.create', compact('tipo_usu'));
    }

    public function store(Request $request)
    {
        $usuarios = usuarios::create($request->all());
        return redirect()->route('usuarios.index');
    }

    public function edit($id)
    {
        $usuarios = usuarios::find($id);
        $tipo_usu = tipoUsuarios::all();
        return view('modules.usuarios.edit', compact('usuarios', 'tipo_usu'));
    }

    public function update(Request $request, $id)
    {
        $usuarios = usuarios::find($id)->update($request->all());
        return redirect()->route('usuarios.show', $id);
    }

    public function show($id)
    {
        $usuarios = usuarios::find($id);
        $tipo_usu = tipoUsuarios::all();
        return view('modules.usuarios.show', compact('usuarios', 'tipo_usu'));
    }

    public function delete($id)
    {
        $usuarios = usuarios::find($id)->delete();
        return redirect()->route('usuarios.index');
    }

}
