<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscripcion extends Model
{
     use HasFactory;

     protected $table = 'inscripciones';
    protected $fillable = [
        'user_id',   
        'evento_id', 
    ];
}
