<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class ConducteurSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
    
   
        $conducteurs = DB::table('users')->where('type', 'conducteur')->pluck('id')->toArray();
    
        foreach ($conducteurs as $userId) {
            DB::table('conducteurs')->insert([
                'id' => Str::uuid()->toString(), 
                'user_id' => $userId, 
                'note' => $faker->randomFloat(1, 0, 5),
                'permis_de_conduire_numero' => null,
                'permis_de_conduire_date' => null,
                'permis_de_conduire_validite' => null,
                'carte_identite_numero' => null,
                'carte_identite_date' => null,
                'carte_identite_validite' => null,
                'photo_permis' => null,
                'photo_cni' => null,
                'statut_verification_permis' => false,
                'statut_verification_cni' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
