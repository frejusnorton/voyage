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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary(); 
            $table->uuid('google_id')->unique()->nullable();;
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('adresse')->nullable();
            $table->string('telephone')->nullable();;
            $table->boolean('is_online')->default(false);
            $table->string('profil_img')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->date('naissance')->nullable();
            $table->enum('sexe', ['homme', 'femme']);
            $table->enum('type', ['passager', 'conducteur']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
