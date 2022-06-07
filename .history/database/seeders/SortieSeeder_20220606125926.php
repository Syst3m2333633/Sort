<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Campus;
use App\Models\Etat;
use App\Models\Lieu;
use App\Models\Ville;
use App\Models\Sortie;

use Illuminate\Database\Seeder;
use Illuminate\Database\Factories;

class SortieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Sortie::class, 10)->create();
    }
}
