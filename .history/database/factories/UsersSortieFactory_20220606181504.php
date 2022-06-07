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
            'user_id' => \App\Models\UsersSortie::factory()->numberBetween(1, 20),
            'sortie_id' => $this->faker->numberBetween(1, 20),
        ];
    }
}