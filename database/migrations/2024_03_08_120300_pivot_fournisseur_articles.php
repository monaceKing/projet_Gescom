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
        Schema::create('pivot_fournisseur_article', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_fournisseur"); // Ajout de la clé étrangère
            $table->foreign("id_fournisseur")->references("id")->on("fournisseurs")->onDelete("cascade");
            $table->unsignedBigInteger("id_article"); // Ajout de la clé étrangère
            $table->foreign("id_article")->references("id")->on("articles")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivot_fournisseur_article');
    }
};
