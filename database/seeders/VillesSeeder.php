<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VillesSeeder extends Seeder
{
    public function run()
    {
        $villes = [
            'Cotonou',
            'Porto-Novo',
            'Parakou',
            'Abomey-Calavi',
            'Bohicon',
            'Abomey',
            'Ouidah',
            'Dassa-Zoumè',
            'Natitingou',
            'Djougou',
            'Lokossa',
            'Kandi',
            'Malanville',
            'Savalou',
            'Dogbo-Tota',
            'Aplahoué',
            'Sakété',
            'Comè',
            'Allada',
            'Tchaourou',
            'Bembèrèkè',
            'Banikoara',
            'Bassila',
            'Cové',
            'Djakotomey',
            'Nikki',
            'Tanguiéta',
            'Pobè',
            'Ségbana',
            'Toviklin',
            'Adjohoun',
            'Grand-Popo',
            'Kérou',
            'Kétou',
            'Kouandé',
            'Lalo',
            'Matéri',
            'N’Dali',
            'Ndali',
            'Péhunco',
            'Sinendé',
            'Toucountouna',
            'Zagnanado',
            'Zé',
            'Athiémé',
            'Ifangni',
            'Kalalé',
            'Ouèssè',
            'Sô-Ava',
            'Za-Kpota'
        ];

        foreach ($villes as $ville) {
            DB::table('villes')->insert([
                'nom' => $ville,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
