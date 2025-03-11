<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PassagerSeeder extends Seeder
{
    public function run()
    {
        $passagers = DB::table('users')->where('type', 'passager')->pluck('id')->toArray();

        foreach ($passagers as $userId) {
            DB::table('passagers')->insert([
                'user_id' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

