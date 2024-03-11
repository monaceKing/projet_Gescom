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
        Schema::create('interlocuteurs', function (Blueprint $table) {
            $table->id();
            $table->string("civilité");
            $table->string("nom");
            $table->string("prenom");
            $table->string("ref_service");
            $table->string("fonction");
            $table->string("adresse");
            $table->string("completement");
            $table->string("code_postal");
            $table->string("region");
            $table->string("ville");
            $table->string("pays");
            $table->string("telephone");
            $table->string("portable");
            $table->unsignedBigInteger("id_societe"); // Ajout de la clé étrangère
            $table->foreign("id_societe")->references("id")->on("societes")->onDelete("cascade"); // Définition de la contrainte de clé étrangère
            $table->unsignedBigInteger("id_service"); // Ajout de la clé étrangère
            $table->foreign("id_service")->references("id")->on("services")->onDelete("cascade"); // Définition de la contrainte de clé étrangère
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_interlocuteurs');
    }
};
