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
        // Deporte para el que sirve el producto: fútbol, running, basketball, gimnasio.
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->unique();   // no se repite la disciplina
            $table->string('descripcion')->nullable(); // explicación breve, opcional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disciplinas');
    }
};