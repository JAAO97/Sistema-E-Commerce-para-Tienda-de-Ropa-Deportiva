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
        Schema::create('movimientos_inventario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('variante_id');
            $table->unsignedBigInteger('user_id');
            $table->string('tipo', 20);               
            $table->integer('cantidad'); 
            $table->string('motivo', 150)->nullable();   
            $table->timestamps();

            $table->foreign('variante_id', 'fk_movimientos_variantes')->references('id')->on('variantes_productos')->onDelete('restrict');
            $table->foreign('user_id', 'fk_movimientos_users')->references('id')->on('users')->onDelete('restrict'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos_inventario');
    }
};
