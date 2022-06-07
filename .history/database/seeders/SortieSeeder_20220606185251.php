<?php

namespace Database\Seeders;

use App\Models\Sortie;
use App\Models\UsersSortie;
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
        \App\Models\Sortie::factory(UsersSortie::class, 10)->create()->each(function ($sortie) {
            $ortie->usersSortie()->attach([
                rand(1, 20),
                rand(1, 20),
            ]
        });
    }
}
