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
        Schema::create('depots', function (Blueprint $table) {
            $table->id();
            $table->string("intitule");
            $table->string("responsable_depot");
            $table->string("code_depot");
            $table->string("adresse");
            $table->string("complement");
            $table->string("code_postal");
            $table->string("region");
            $table->string("ville");
            $table->string("pays");
            $table->string("telephone");
            $table->string("email");
            $table->foreign("id_societe")->references("id")->on("societes")->onDelete("cascade"); // Définition de la contrainte de clé étrangère
            $table->unsignedBigInteger("id_depot"); // Ajout de la clé étrangère
            $table->foreign("id_depot")->references("id")->on("depots")->onDelete("cascade"); // Définition de la contrainte de clé étrangère
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_depots');
    }
};
