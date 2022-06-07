<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 2)->create()->each(function($user) {
            $user->sortie()->saveMany(factory(Sortie::class, 10)->create([
                'user_id' => $user->id
            ]));
    }
}
