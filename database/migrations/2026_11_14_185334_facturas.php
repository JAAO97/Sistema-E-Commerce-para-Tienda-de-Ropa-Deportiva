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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pedido_id');
            $table->unsignedBigInteger('cai_rango_id');
            $table->string('numero_factura')->unique();               
            $table->dateTime('fecha_emision');
            $table->string('rtn_emisor'); 
            $table->string('rtn_cliente'); 
            $table->string('nombre_cliente');
            $table->decimal('importe_gravado',10,2);
            $table->decimal('isv_15',10,2);
            $table->decimal('total',10,2);
            $table->string('estado')->default('EMITIDA');   
            $table->timestamps();

            $table->foreign('pedido_id')->references('id')->on('pedidos'); 
            $table->foreign('cai_rango_id')->references('id')->on('cai_rangos'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
