<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function registro()
    {
        return view('usuario.registro');
    }
    public function gestion()
    {
        $usuarios = User::all();
        return view('usuario.gestion', compact('usuarios'));
    }
    public function editar(){
        $usuario= User::find($id);
        return view('usuario.perfil', compact('usuario'));
    }
    public function actualizar(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|unique:user,email',
            'password' => 'nullable|min:8|confirmed',
        ]);
        $usuario = User::find($id);
        $usuario->update([
            'name' => $request->nombre,
            'email' =>$request->email,
            'password'=>$request->password_hash,
        ]);

        return redirect()->route('usuario.perfil')->with('success', 'Perfil actualizado correctamente');
    }

    public function guardar(Request $request)
    {
        $request->validate()([
            'nombre'=> 'required|string|max:100',
            'email'=>'required|email|unique:user,email',
            'password'=>'required|min:8|confirmed',
        ]);

        $usuario =User::Create([
            'name'=>$request->nombre,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        return redirect()->route('usuario.registro'->with('success','Usuario Regsitrado'));
    }
    public function eliminar($id)
    {
        $usuario =User::find($id);
        $usuario->delete();
        return redirect()->route('usuario.gestion'->with('success','Usuario Eliminado'));
    }

    

}
