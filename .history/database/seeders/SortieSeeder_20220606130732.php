<?php

namespace Database\Seeders;

use App\Models\Sortie;

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
       \App\Models\Sortie(Sortie::class, 10)->create();
    }
}
