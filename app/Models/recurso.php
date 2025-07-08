<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class recurso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'tipo', 'descripcion', 'disponible', 'evento_id'
    ];
}
