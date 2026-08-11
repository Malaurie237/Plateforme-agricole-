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
    Schema::create('avis_etoiles', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // L'acheteur qui donne l'avis
        $table->foreignId('agriculteur_id')->constrained('users')->onDelete('cascade'); // L'agriculteur évalué
        $table->foreignId('cultures_fruit_id')->nullable()->constrained('cultures_fruits')->onDelete('set null');
        
        $table->tinyInteger('note'); // Note de 1 à 5 ⭐
        $table->text('commentaire')->nullable();
        
        $table->timestamps();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avis_etoile');
    }
};
