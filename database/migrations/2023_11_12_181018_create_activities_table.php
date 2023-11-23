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
        Schema::create('activities', function (Blueprint $table) {
            $table->id(); // Crée une colonne 'id' INTEGER PRIMARY KEY AUTOINCREMENT
            $table->string('name'); // Crée une colonne 'name' TEXT NOT NULL
            $table->integer('age')->nullable(); // Crée une colonne 'age' INTEGER, avec NULL autorisé
            $table->string('activity'); // Crée une colonne 'activity' TEXT NOT NULL
            $table->text('description')->nullable(); // Crée une colonne 'description' TEXT, avec NULL autorisé
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
