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
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            // Clave foránea que hace referencia al usuario que marcó el personaje como favorito
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            // Clave foránea que hace referencia al personaje marcado como favorito
            $table->foreignId('character_id')->constrained('characters')->onUpdate('cascade')->onDelete('cascade');
            // Esta columna almacena la referencia única al personaje en la API de Rick and Morty
            $table->string('ref_api');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};
