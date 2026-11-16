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
            $table->foreignId('tienda_id')->constrained('tiendas')->onDelete('restrict');
            $table->string('cai', 50)->unique();               
            $table->string('rango_inicial', 25); 
            $table->string('rango_final', 25); 
            $table->unsignedBigInteger('numero_actual'); 
            $table->date('fecha_limite_emision'); 
            $table->boolean('activo')->default(true);  
            $table->timestamps();

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
