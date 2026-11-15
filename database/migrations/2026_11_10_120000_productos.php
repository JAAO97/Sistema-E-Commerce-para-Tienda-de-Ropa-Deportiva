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
        // Catálogo de productos. La talla, el color y el stock viven en variantes_productos.
        Schema::create('productos', function (Blueprint $table) {
            $table->id();

            // Si se intenta borrar una tienda, marca, categoría o disciplina
            // que tiene productos, MySQL lo rechaza (restrict).
            $table->foreignId('tienda_id')->constrained('tiendas')->restrictOnDelete();
            $table->foreignId('marca_id')->constrained('marcas')->restrictOnDelete();
            $table->foreignId('categoria_id')->constrained('categorias')->restrictOnDelete();
            $table->foreignId('disciplina_id')->constrained('disciplinas')->restrictOnDelete();

            $table->string('nombre', 150);
            $table->string('slug', 180)->unique();           // nombre para la URL, único
            $table->text('descripcion')->nullable();
            $table->string('genero', 20);                    // hombre, mujer, unisex, nino, nina
            $table->decimal('precio', 10, 2);                // dinero siempre en decimal
            $table->decimal('precio_oferta', 10, 2)->nullable();
            $table->boolean('destacado')->default(false);    // aparece en el Home
            $table->boolean('activo')->default(true);        // si se muestra en la tienda
            $table->timestamps();

            $table->index('nombre');                         // acelera la búsqueda por nombre
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