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
            $table->string('name', 100); 
            $table->decimal('price', 10, 2); 
            $table->text('description'); 
            $table->timestamps();
            

            $table->string('name')->nullable(false)->change();
            $table->decimal('price', 10, 2)->nullable(false)->change();
            $table->text('description')->nullable(false)->change();
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
