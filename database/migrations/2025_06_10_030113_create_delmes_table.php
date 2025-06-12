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
            $table->string('nombre');
            $table->string('marca');
            $table->text('descripcion')->nullable();
            $table->decimal('precio_original', 8, 2);
            $table->decimal('precio_oferta', 8, 2);
            $table->string('imagen')->nullable();
            $table->integer('stock')->default(0);
            $table->enum('categoria', [
                'keratinas', 
                'proteinas', 
                'ganadores_peso', 
                'quemadores_grasa', 
                'barras_energeticas', 
                'vitaminas_otros'
            ]);
            $table->boolean('activo')->default(true);
            $table->boolean('destacado')->default(false);
            $table->timestamps();
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
