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
        Schema::create('lois_textes_reglementaires', function (Blueprint $table) {
            $table->id('id_lois_textes_reglementaires');
            $table->string('titre_lois_textes');
            $table->string('categorie_lois_textes');
            $table->string('juridiction');
            $table->string('type_de_fichier');
            $table->string('taille_du_fichier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lois_textes_reglementaires');
    }
};
