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
        Schema::create('apartados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('variante_id');
            $table->integer('cantidad')->default(1);
            $table->dateTime('fecha_apartado');  
            $table->dateTime('fecha_expiracion');            
            $table->string('estado')->default('ACTIVO');    
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users'); 
            $table->foreign('variante_id')->references('id')->on('variantes_productos'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::dropIfExists('apartados'); 
    }
};
