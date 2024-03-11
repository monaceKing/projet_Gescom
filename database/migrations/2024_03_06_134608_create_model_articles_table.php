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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("designation");
            $table->string("famille");
            $table->string("suivi_stock");
            $table->string("prix_achat");
            $table->string("dernier_prix_achat");
            $table->unsignedBigInteger("id_famille"); // Ajout de la clé étrangère
            $table->foreign("id_famille")->references("id")->on("familles")->onDelete("cascade"); // Définition de la contrainte de clé étrangère
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_articles');
    }
};
