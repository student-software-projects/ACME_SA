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
        return view('modules/usuarios/index', compact('usuarios'));
    }

}
