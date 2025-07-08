<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recursos', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');       
        $table->string('tipo');          
        $table->text('descripcion');     
        $table->boolean('disponible')->default(true);  
        $table->foreignId('evento_id')->nullable()->constrained('eventos')->onDelete('cascade');  
        $table->timestamps();            
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recursos');
    }
};
