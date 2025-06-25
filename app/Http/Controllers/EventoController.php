<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function mostrar(){
        if(auth::check()){
            return view('evento.mostrar');
        }else{
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
    public function editar()
{
    return view("evento.modificar");
}
}
