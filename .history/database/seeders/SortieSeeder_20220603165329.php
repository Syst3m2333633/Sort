<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SortieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Sortie::create(
            [
                'name' => 'Triplette',
                'dateHeureDebut' => '29/11/2022',
                'duree' => '2',
                'dateLimiteInscription' => '20/11/2022',
                'nbInscriptionMax' => '10',
                'infoSortie' => 'Une partie de pétanque en plein air',
                'etat' => 'Ouverte',
                'lieu_id' => '1',
                'campus_id' => '1',
                'user_id' => '1',
                'etat_id' => '1',
            ]
            );
    }
}
