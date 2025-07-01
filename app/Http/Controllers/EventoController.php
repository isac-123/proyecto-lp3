<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
        public function mostrar()
    {
        if (Auth::check()) {
            
            $eventos = Evento::all();
            return view('evento.mostrar', compact('eventos')); 
        } else {
            return redirect('login');
        }
        
    }
    public function crear(){
        if(auth::check()){
            return view('evento.crear');
        }else{
            return redirect('login');
        }
        
    }
     public function guardar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha' => 'required|date',
            'categoria' => 'required|string',
            'descripcion' => 'required|string',
        ]);

        Evento::create([
            'nombre' => $request->nombre,
            'fecha' => $request->fecha,
            'categoria' => $request->categoria,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('evento.mostrar')->with('success', 'Evento creado exitosamente');
    }

    public function editar($id)
    {
        if (Auth::check()) {
            $evento = Evento::find($id);
            return view('evento.modificar', compact('evento')); 
        } else {
            return redirect('login');
        }
    }
     public function modificarGuardar(Request $request, $id)
    {
        
        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha' => 'required|date',
            'categoria' => 'required|string',
            'descripcion' => 'required|string',
        ]);

       
        $evento = Evento::find($id);
        $evento->update([
            'nombre' => $request->nombre,
            'fecha' => $request->fecha,
            'categoria' => $request->categoria,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('evento.mostrar')->with('success', 'Evento actualizado correctamente');
    }
    public function eliminar($id){
        $evento = Evento::findOrFail($id);  
        $evento->delete();
        return redirect()->route('evento.mostrar')->with('success', 'Evento eliminado exitosamente');
    
    }
}
