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
        \Database\factories\Sortie::factory()->create(10);
    }
}
