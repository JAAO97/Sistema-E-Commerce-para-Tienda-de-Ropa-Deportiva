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
        Schema::create('pedidos_detalles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pedido_id');
            $table->unsignedBigInteger('variante_id');
            $table->integer('cantidad');               
            $table->decimal('precio_unitario',10,2); 
            $table->decimal('subtotal',10,2);   
            $table->timestamps();

            $table->foreign('pedido_id')->references('id')->on('pedidos'); 
            $table->foreign('variante_id')->references('id')->on('variantes_productos'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos_detalles');
    }
};
