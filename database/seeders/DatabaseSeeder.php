<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            PassagerSeeder::class,
            UsersSeeder::class,
            VillesSeeder::class,
            ConducteurSeeder::class,
            TrajetSeeder::class,
            ReservationSeeder::class,
        ]);
    }
    
}
