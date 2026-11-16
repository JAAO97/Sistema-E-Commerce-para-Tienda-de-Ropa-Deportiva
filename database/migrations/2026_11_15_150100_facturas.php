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
            $table->foreignId('pedido_id')->unique()->constrained('pedidos')->onDelete('restrict');
            $table->foreignId('cai_rango_id')->constrained('cai_rangos')->onDelete('restrict');
            $table->string('numero_factura', 25)->unique();               
            $table->dateTime('fecha_emision');
            $table->string('rtn_emisor', 20); 
            $table->string('rtn_cliente', 20)->nullable();; 
            $table->string('nombre_cliente', 150);
            $table->decimal('importe_gravado', 10, 2);
            $table->decimal('isv_15', 10, 2);
            $table->decimal('total', 10, 2);
            $table->string('estado', 20)->default('EMITIDA');   
            $table->timestamps();

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
