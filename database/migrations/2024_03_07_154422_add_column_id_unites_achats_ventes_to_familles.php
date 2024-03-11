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
        Schema::table('familles', function (Blueprint $table) {
            $table->unsignedBigInteger('id_unites_achats_ventes');
            $table->foreign('id_unites_achats_ventes')
                  ->references('id')
                  ->on('unites_achats_ventes')
                  ->onDelete('cascade') ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('familles', function (Blueprint $table) {
            //
            $table->dropForeign(['id_unites_achats_ventes']);
            $table->dropColumn('id_unites_achats_ventes');
        });
    }
};
