<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 
        'fecha', 
        'categoria', 
        'descripcion',
    ];
}
