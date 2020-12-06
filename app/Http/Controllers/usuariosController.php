<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;

class usuariosController extends Controller
{
    //

    public function index()
    {
        $usuarios = usuarios::all();
        return view('modules.usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        $usuarios = usuarios::all();
        return view('modules.usuarios.create');
    }

    public function store(Request $request)
    {
        $usuarios = usuarios::create($request->all());
        return redirect()->route('usuarios.index');
    }

    public function edit($id)
    {
        $usuarios = usuarios::find($id);
        return view('modules.usuarios.edit', compact('usuarios'));
    }

    public function update(Request $request, $id)
    {
        $usuarios = usuarios::find($id)->update($request->all());
        return redirect()->route('usuarios.show', $id);
    }

    public function show($id)
    {
        $usuarios = usuarios::find($id);
        return view('modules.usuarios.show', compact('usuarios'));
    }

    public function delete($id)
    {
        $usuarios = usuarios::find($id)->delete();
        return redirect()->route('usuarios.index');
    }

}
