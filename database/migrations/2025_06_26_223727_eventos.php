<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

public function up()
{
    
    Schema::create('eventos', function (Blueprint $table) {
        $table->id();                 
        $table->string('nombre');      
        $table->date('fecha');       
        $table->string('categoria');  
        $table->text('descripcion');        
        $table->timestamps();         
    });
}

public function down()
{
    Schema::dropIfExists('eventos');
}

};
