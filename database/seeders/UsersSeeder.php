<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

      
        for ($i = 0; $i < 20; $i++) {
            $userId = DB::table('users')->insertGetId([
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName,
                'email' => $faker->unique()->safeEmail,
                'adresse' => $faker->address,
                'telephone' => $faker->phoneNumber,
                'profil_img' => null,
                'naissance' => $faker->date('Y-m-d', '2000-01-01'),
                'sexe' => $faker->randomElement(['homme', 'femme']),
                'type' => 'passager',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('passagers')->insert([
                'user_id' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Insérer 20 conducteurs
        for ($i = 0; $i < 20; $i++) {
            $userId = DB::table('users')->insertGetId([
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName,
                'email' => $faker->unique()->safeEmail,
                'adresse' => $faker->address,
                'telephone' => $faker->phoneNumber,
                'profil_img' => null,
                'naissance' => $faker->date('Y-m-d', '2000-01-01'),
                'sexe' => $faker->randomElement(['homme', 'femme']),
                'type' => 'conducteur',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('conducteurs')->insert([
                'user_id' => $userId,
                'note' => $faker->randomFloat(1, 0, 5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

