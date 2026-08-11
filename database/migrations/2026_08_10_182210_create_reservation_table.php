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
        
    Schema::create('reservations', function (Blueprint $table) {
        $table->id();
        $table->string('numero_reservation')->unique(); // Code unique de réservation
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // L'acheteur (Grossiste, Industriel, etc.)
        $table->foreignId('cultures_fruit_id')->constrained('cultures_fruits')->onDelete('cascade'); // Le produit
        
        $table->integer('quantite_reservee');
        $table->decimal('montant_total', 12, 2); // Prix total en FCFA
        $table->decimal('montant_acompte', 12, 2); // Acompte (30% à 50%)
        $table->decimal('commission_admin', 12, 2); // Commission prélevée (3% à 5%)
        
        // Statut du paiement et de la livraison (Gestion Séquestre)
        $table->enum('statut_sequestre', ['en_attente', 'payee_sequestre', 'livree_et_transferee', 'annulee'])->default('en_attente');
        $table->enum('mode_paiement', ['mobile_money', 'orange_money', 'a_la_livraison'])->default('mobile_money');
        
        $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};
