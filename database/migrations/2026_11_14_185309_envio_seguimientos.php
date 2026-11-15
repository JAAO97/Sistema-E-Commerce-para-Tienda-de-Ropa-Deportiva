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
        Schema::create('envio_seguimientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('envio_id');
            $table->string('estado');               
            $table->string('comentario')->nullable(); 
            $table->dateTime('fecha');   
            $table->timestamps();

            $table->foreign('envio_id')->references('id')->on('envios'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envio_seguimientos');
    }
};
