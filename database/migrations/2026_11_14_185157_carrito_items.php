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
        Schema::create('carrito_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carrito_id');
            $table->unsignedBigInteger('variante_id');
            $table->integer('cantidad')->default(1);                 
            $table->timestamps();

            $table->foreign('carrito_id')->references('id')->on('carritos'); 
            $table->foreign('variante_id')->references('id')->on('variantes_productos');
            $table->unique(['carrito_id','variante_id']); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrito_items');
    }
};
