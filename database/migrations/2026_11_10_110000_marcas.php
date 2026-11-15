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
        // Marcas de ropa deportiva (Nike, Adidas, Puma...).
        Schema::create('marcas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->unique();   // no se repite la misma marca
            $table->string('logo')->nullable();        // ruta de la imagen, puede quedar vacía
            $table->boolean('activa')->default(true);  // si la marca se muestra en la tienda
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marcas');
    }
};