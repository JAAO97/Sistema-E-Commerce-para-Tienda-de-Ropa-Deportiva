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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tienda_id');
            $table->unsignedBigInteger('direccion_id')->nullable();
            $table->string('numero_pedido');               
            $table->string('tipo_entrega'); 
            $table->string('estado')->default('PENDIENTE');
            $table->decimal('subtotal',10,2)->default(0.00);
            $table->decimal('costo_envio',10,2)->default(0.00);
            $table->decimal('isv',10,2)->default(0.00);
            $table->decimal('total',10,2)->default(0.00);
            $table->dateTime('fecha_pedido');   
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('tienda_id')->references('id')->on('tiendas');
            $table->foreign('direccion_id')->references('id')->on('direcciones'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
