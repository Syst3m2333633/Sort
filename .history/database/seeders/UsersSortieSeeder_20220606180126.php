<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSortieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UsersSortie::factory()->count(10)->create();
    }
}
