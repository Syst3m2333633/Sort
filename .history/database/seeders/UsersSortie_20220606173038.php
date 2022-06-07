<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSortie extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UsersSortie::factory(UsersSortie::class, 10)->create();
    }
}
