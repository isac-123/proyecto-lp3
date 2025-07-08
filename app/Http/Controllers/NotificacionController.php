<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notificacion;

class NotificacionController extends Controller
{
     public function mostrarFormulario()
    {
        return view('notificacion.enviar'); 
    }

    
    public function enviar(Request $request)
    {
        
        $request->validate([
            'mensaje' => 'required|string|max:255',  
        ]);

        
        $notificacion = Notificacion::create([
            'mensaje' => $request->mensaje,
            'fechaEnvio' => now(),  
        ]);

        return redirect()->route('notificacion.enviar')->with('success', 'Notificación enviada exitosamente');
    }
}
