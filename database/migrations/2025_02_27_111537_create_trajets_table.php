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
        Schema::create('trajets', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ville_depart_id');
            $table->unsignedBigInteger('ville_arrive_id');
            $table->date('date_depart');
            $table->time('heure_depart');
            $table->decimal('prix', 8, 2);
            $table->integer('nombre_personnes');
            $table->enum('statut', ['disponible', 'complet', 'annulé'])->default('disponible'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trajets');
    }
};
