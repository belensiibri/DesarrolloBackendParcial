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
        schema::create('books', function(Blueprint $table){
            $table->id();
            $table->string('Titulo');
            $table->string('Descripcion');
            $table->string('ISBN');
            $table->integer('Copias_totales');
            $table->integer('Copias_disponibles');
            $table->boolean('Estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
