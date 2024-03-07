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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100); // Asegúrate de ajustar la longitud máxima según tus necesidades
            $table->decimal('price', 8, 2); // Esto permite hasta 8 dígitos en total, con 2 después del punto decimal
            $table->text('description')->nullable();
            $table->timestamps();
            $table->foreignId('category_id')->constrained('categories');
        });
        
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
