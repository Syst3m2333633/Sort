<?php

namespace Database\Seeders;

use App\Models\User;
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
       factory(User::class, 10)->create()->each(function ($user) {
            $user->sortie()->save(factory(App\Models\Sortie::class)->make());
        });
    }
}
