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
    Schema::create('cultures_fruits', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // L'agriculteur qui publie
        $table->string('nom_produit'); // Ex: Mangues, Bananes, Plantules d'ananas
        $table->string('categorie')->default('fruit'); // fruit, plantule, legume
        $table->integer('quantite_disponible'); // Ex: 500 (en kg ou unités)
        $table->string('unite')->default('kg'); // kg, tonnes, casiers
        $table->decimal('prix_unitaire', 10, 2); // Prix en FCFA
        $table->string('zone_localisation'); // Ex: Penja, Foumbot, Yaoundé
        $table->text('description')->nullable();
        $table->string('photo')->nullable(); // Image du produit
        
        // Indicateur de périssabilité (Code couleur)
        $table->enum('niveau_perissabilite', ['vert', 'orange', 'rouge'])->default('vert'); // rouge = déstockage rapide
        
        // Option de mise en avant (Boost payant)
        $table->boolean('est_sponsorise')->default(false);
        
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cultures_fruits');
    }
};
