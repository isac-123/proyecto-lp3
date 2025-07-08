<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recurso;
use App\Models\Evento;
class RecursoController extends Controller
{
    public function crear($eventoId)
    {
        $evento = Evento::findOrFail($eventoId);
        return view('recurso.create', compact('evento'));
    }

    
    public function store(Request $request, $eventoId)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'tipo' => 'required|string',
        'descripcion' => 'required|string',
    ]);

    
    Recurso::create([
        'nombre' => $request->nombre,
        'tipo' => $request->tipo,
        'descripcion' => $request->descripcion,
        'evento_id' => $eventoId,
        'disponible' => true, 
    ]);

    return redirect()->route('evento.mostrar', $eventoId)->with('success', 'Recurso creado exitosamente');
}

    public function reservar($id)
    {
        $recurso = Recurso::findOrFail($id);

        
        if (!$recurso->disponible) {
            return redirect()->route('evento.mostrar', $recurso->evento_id)->with('error', 'Este recurso ya está reservado');
        }

        $recurso->reservar();

        return redirect()->route('evento.mostrar', $recurso->evento_id)->with('success', 'Recurso reservado exitosamente');
    }

    
    public function liberar($id)
    {
        $recurso = Recurso::findOrFail($id);

        
        $recurso->liberar();

        return redirect()->route('evento.mostrar', $recurso->evento_id)->with('success', 'Recurso liberado');
    }
}