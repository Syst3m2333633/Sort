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
                'dateHeureDebut' => '',
                'duree' => '2',
                'dateLimiteInscription' => '20',
                'nbInscriptionsMax' => '10',
                'infoSortie' => 'Une partie de pétanque en plein air',
                'etat' => 'Ouverte',
            ]
            );
    }
}
