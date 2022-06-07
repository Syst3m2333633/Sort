<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illumintae\Database\Factories\Factory;

class SortieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factories(User::class, 10)->create()->each(function ($user) {
            $user->sortie()->save(factories(App\Models\Sortie::class)->make());
        });
    }
}
