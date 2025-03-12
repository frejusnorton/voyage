<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Ville; 
use Illuminate\Support\Str;

class TrajetSeeder extends Seeder
{
    public function run()
    {
        $conducteurs = User::where('type', 'conducteur')->get();

        for ($i = 0; $i < 100; $i++) {
            $user = $conducteurs->random();
            $villeDepart = DB::table('villes')->inRandomOrder()->value('id'); // UUID correct
            $villeArrivee = DB::table('villes')->inRandomOrder()->value('id'); // UUID correct

            // Génération de l'heure et la date de départ
            $hour = rand(6, 20);
            $minute = rand(0, 59);
            $heureDepart = sprintf('%02d:%02d', $hour, $minute);
            $dateDepart = Carbon::now()->addDays(rand(1, 30))->format('Y-m-d');

            // Description aléatoire
            $description = rand(0, 1) ? "Trajet confortable, avec des arrêts réguliers pour se reposer." : null;

            DB::table('trajets')->insert([
                'id' => Str::uuid()->toString(),
                'user_id' => $user->id,
                'ville_depart_id' => $villeDepart, // UUID correct
                'ville_arrive_id' => $villeArrivee, // UUID correct
                'heure_depart' => $heureDepart, 
                'prix' => rand(2000, 10000),
                'date_depart' => $dateDepart,
                'nombre_personnes' => rand(1, 4),
                'statut' => collect(['disponible', 'complet', 'annulé'])->random(),
                'description' => $description,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
