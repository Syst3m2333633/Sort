<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UsersSortieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\UsersSortie::factory()->create()->random(1, 20),
            'sortie_id' => \App\Models\UsersSortie::factory()->create()->random(1, 20),
        ];
    }
}
