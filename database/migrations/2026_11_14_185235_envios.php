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
        Schema::create('envios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pedido_id')->unique();
            $table->string('estado')->default('PENDIENTE');               
            $table->string('numero_guia')->nullable(); 
            $table->dateTime('fecha_envio');
            $table->dateTime('fecha_entrega');   
            $table->timestamps();

            $table->foreign('pedido_id')->references('id')->on('pedidos'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envios');
    }
};
