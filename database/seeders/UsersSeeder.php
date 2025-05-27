<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsersSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            $userId = Str::uuid()->toString();
            DB::table('users')->insert([
                'id' => $userId,
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName,
                'email' => $faker->unique()->safeEmail,
                'adresse' => $faker->address,
                'telephone' => '0190775682',
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
                'id' => Str::uuid()->toString(),
                'user_id' => $userId,
                'note' => $faker->randomFloat(1, 0, 5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }


        $adminId = Str::uuid()->toString();
        DB::table('users')->insert([
            'id' => $adminId,
            'nom' => 'frejus',
            'prenom' => 'AGUESSY',
            'email' => 'nortonfrejus77@gmail.com',
            'adresse' => 'Adresse Admin',
            'telephone' => '0102030405',
            'profil_img' => null,
            'naissance' => '2000-01-01',
            'sexe' => 'homme',
            'type' => 'conducteur',
            'is_admin' => true,
            'email_verified_at' => now(),
            'password' => Hash::make('motdepasse1@@FA'),
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('conducteurs')->insert([
            'id' => Str::uuid()->toString(),
            'user_id' => $adminId,
            'note' => 5.0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        for ($i = 0; $i < 10; $i++) {
            $userId = Str::uuid()->toString();
            DB::table('users')->insert([
                'id' => $userId,
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
                'id' => Str::uuid()->toString(),
                'user_id' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
