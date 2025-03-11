<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Ville; // Si tu as un modèle Ville lié à ta table 'villes'

class TrajetSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        $villes = Ville::all();

        for ($i = 0; $i < 100; $i++) {
            $user = $users->random();
            $villeDepart = $villes->random();
            $villeArrive = $villes->random();

            while ($villeDepart->id == $villeArrive->id) {
                $villeArrive = $villes->random();
            }

            $hour = rand(6, 20);
            $minute = rand(0, 59);

            $formattedMinute = sprintf('%02d', $minute);
            $dateDepart = Carbon::now()->addDays(rand(1, 30));
            $heureDepart = Carbon::createFromFormat('H:i', "{$hour}:{$formattedMinute}");

            $description = rand(0, 1) ? "Trajet confortable, avec des arrêts réguliers pour se reposer." : null;

            DB::table('trajets')->insert([
                'user_id' => $user->id,
                'ville_depart_id' => $villeDepart->id,
                'ville_arrive_id' => $villeArrive->id,
                'heure_depart' => $heureDepart->format('H:i'),
                'prix' => rand(2000, 10000),
                'date_depart' => $dateDepart->format('Y-m-d'),
                'nombre_personnes' => rand(1, 4),
                'statut' => collect(['disponible', 'complet', 'annulé'])->random(),
                'description' => $description,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
