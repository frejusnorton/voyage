<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReservationSeeder extends Seeder
{
    public function run()
    {
        // Récupérer tous les utilisateurs et trajets existants
        $users = DB::table('users')->pluck('id')->toArray();
        $trajets = DB::table('trajets')->pluck('id')->toArray();

        if (empty($users) || empty($trajets)) {
            return;
        }

        // Générer 100 réservations aléatoires
        $reservations = [];
        for ($i = 0; $i < 100; $i++) {
            $reservations[] = [
                'id' => Str::uuid(),
                'user_id' => $users[array_rand($users)], 
                'trajet_id' => $trajets[array_rand($trajets)], 
                'status' => collect(['en attente', 'confirmer', 'annuler'])->random(), 
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insérer les réservations dans la base de données
        DB::table('reservations')->insert($reservations);
    }
}
