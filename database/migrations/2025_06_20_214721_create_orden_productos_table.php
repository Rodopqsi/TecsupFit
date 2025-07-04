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
        Schema::create('orden_productos', function (Blueprint $table) {
    $table->id();
    $table->foreignId('orden_id')->constrained('ordenes')->onDelete('cascade');

    $table->string('nombre');
    $table->decimal('precio', 8, 2);
    $table->integer('cantidad');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orden_productos');
    }
};
