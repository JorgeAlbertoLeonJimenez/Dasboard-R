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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name_product'); // Cambiado de 'name' a 'string'
            $table->integer('price'); // Cambiado de 'int' a 'integer'
            $table->integer('count')->default(1); // Cambiado de 'int' a 'integer'
            $table->foreignId('user_id')->constrained();
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
