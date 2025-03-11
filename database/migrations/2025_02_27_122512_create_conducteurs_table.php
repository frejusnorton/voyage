<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('conducteurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('permis_de_conduire_numero')->nullable(); 
            $table->date('permis_de_conduire_date')->nullable(); 
            $table->date('permis_de_conduire_validite')->nullable(); 
            $table->string('carte_identite_numero')->nullable(); 
            $table->date('carte_identite_date')->nullable(); 
            $table->date('carte_identite_validite')->nullable(); 
            $table->string('photo_permis')->nullable(); 
            $table->string('photo_cni')->nullable(); 
            $table->boolean('statut_verification_permis')->default(false); 
            $table->boolean('statut_verification_cni')->default(false);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conducteurs');
    }
};
