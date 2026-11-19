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
        Schema::create('tallas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 30);
            $table->string('tipo', 20);
            $table->unsignedSmallInteger('orden')->default(0);
            $table->timestamps();

            $table->unique(['nombre', 'tipo'], 'uq_tallas_nombre_tipo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tallas');
    }
};
