<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//adelantaron
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('variantes_productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('talla_id');
            $table->unsignedBigInteger('color_id');
            $table->string('sku', 60)->unique();  
            $table->string('codigo_barras', 80)->nullable()->unique();
            $table->integer('stock')->default(0);
            $table->integer('stock_minimo')->default(3);             
            $table->boolean('activo')->default(true);    
            $table->timestamps();
            
            $table->foreign('producto_id', 'fk_variantes_productos')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('talla_id', 'fk_variantes_tallas')->references('id')->on('tallas')->onDelete('restrict');
            $table->foreign('color_id', 'fk_variantes_colores')->references('id')->on('colores')->onDelete('restrict');
            $table->unique(['producto_id', 'talla_id', 'color_id'], 'uq_variante_producto_talla_color');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variantes_productos');
    }
};
