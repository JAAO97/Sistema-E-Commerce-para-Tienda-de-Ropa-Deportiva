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
        Schema::create('variantes_productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('talla_id');
            $table->unsignedBigInteger('color_id');
            $table->string('sku')->unique();  
            $table->integer('stock')->default(0);
            $table->integer('stock_minimo')->default(3);             
            $table->boolean('activo')->default(true);    
            $table->timestamps();
            
            $table->foreign('producto_id')->references('id')->on('productos'); 
            $table->foreign('talla_id')->references('id')->on('tallas'); 
            $table->foreign('color_id')->references('id')->on('colores'); 
            $table->unique(['producto_id','talla_id','color_id']);
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
