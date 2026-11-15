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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pedido_id');
            $table->string('metodo');               
            $table->decimal('monto',10,2); 
            $table->string('estado')->default('PENDIENTE');
            $table->string('referencia')->nullable();
            $table->dateTime('fecha_pago');   
            $table->timestamps();

            $table->foreign('pedido_id')->references('id')->on('pedidos'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
