<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class evento extends Model
{
    
    #aaaaaaaa
    use HasFactory;

    protected $fillable = [
        'nombre', 
        'fecha', 
        'categoria', 
        'descripcion',
    ];
}
