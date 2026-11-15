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
        Schema::create('cai_rangos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tienda_id');
            $table->string('cai')->unique();               
            $table->integer('rango_inicial'); 
            $table->integer('rango_final'); 
            $table->integer('numero_actual'); 
            $table->dateTime('fecha_limite_emision'); 
            $table->boolean('activo')->default(true);  
            $table->timestamps();

            $table->foreign('tienda_id')->references('id')->on('tiendas'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cai_rangos');
    }
};
