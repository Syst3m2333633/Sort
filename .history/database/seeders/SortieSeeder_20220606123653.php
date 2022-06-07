<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

class SortieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Factory(Sortie::class, 10)->create();
    }
}
