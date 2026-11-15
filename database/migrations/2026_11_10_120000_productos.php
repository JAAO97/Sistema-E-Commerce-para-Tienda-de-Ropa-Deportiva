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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tienda_id');
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('disciplina_id');
            $table->string('nombre');               
            $table->string('slug')->unique(); 
            $table->text('descripcion')->nullable(); 
            $table->string('genero'); 
            $table->decimal('precio',10,2);
            $table->decimal('precio_oferta',10,2)->nullable();
            $table->boolean('destacado')->default(false);
            $table->boolean('activo')->default(true);    
            $table->timestamps();

            $table->foreign('tienda_id')->references('id')->on('tiendas'); 
            $table->foreign('marca_id')->references('id')->on('marcas'); 
            $table->foreign('categoria_id')->references('id')->on('categorias'); 
            $table->foreign('disciplina_id')->references('id')->on('disciplinas'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
