<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function registro()
    {
        return view('usuario.registro');
    }
      public function perfil()
    {
        $usuario = session('usuario');
        return view('usuario.perfil', compact('usuario'));
    }
    public function gestion()
    {
        return view('usuario.gestion', compact('usuarios'));
    }
}
