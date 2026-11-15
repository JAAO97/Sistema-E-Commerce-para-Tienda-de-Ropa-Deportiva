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
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id();
            //si se elimina el registro del usuario, ya no es necesario conocer su direccion domiciliaria
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();  //
            $table->string('alias',60);               
            $table->string('departamento'); 
            $table->string('municipio'); 
            $table->string('direccion_detalle'); 
            $table->string('referencia')->nullable();   //referencia opcional
            $table->string('telefono',20);
            $table->boolean('es_principal')->default(false);  //por defecto no toda sucursal es la tienda principal  
            $table->timestamps();
 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direcciones');
    }
};
