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
        \App\Models\UsersSortie::factory(UsersSortie::class, 10)->create()->each(function($usersSortie) {
            $usersSortie->sortie()->saveMany(\App\Models\UsersSortie::factory(UsersSortie::class, 10)->create( [
                'users_id' => $usersSortie->users_id,
                'sortie_id' => $usersSortie->sortie_id,
            ]));
            $usersSortie->save();
        });
    }
}
