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
        Schema::create('tiendas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100)->unique();  //nombre unico para cada tienda
            $table->string('rtn');   //registro tributario nacional registrado a la tienda            
            $table->text('direccion');   //direccion fisica de la tienda
            $table->string('ciudad');    //ciudad en que se ubica la tienda
            $table->string('telefono')->nullable();  //numero telefonico opcional
            $table->boolean('activa')->default(true);  //por defecto cada tienda esta activa  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiendas');
    }
};
