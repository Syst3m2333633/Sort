<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Campus::factory()->count(10)->create();

    }
}
