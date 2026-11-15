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
        // Galería de fotos de cada producto. Solo se guarda la ruta, no la imagen.
        Schema::create('imagenes_producto', function (Blueprint $table) {
            $table->id();

            // Si se borra el producto, se borran también sus fotos (cascade).
            $table->foreignId('producto_id')->constrained('productos')->cascadeOnDelete();

            $table->string('ruta');
            $table->boolean('es_principal')->default(false);    // foto que se ve en las tarjetas
            $table->unsignedSmallInteger('orden')->default(0);  // posición en la galería (número, no texto)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagenes_producto');
    }
};