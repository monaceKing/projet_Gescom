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
        Schema::create('societes', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("activité");
            $table->string("adresse");
            $table->string("complement");
            $table->string("code_postal");
            $table->string("region");
            $table->string("ville");
            $table->string("pays");
            $table->string("telephone");
            $table->string("email");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_societes');
    }
};
