<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\SortieFactory;

class SortieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       SortieFactory(Sortie::class, 10)->create();
    }
}
