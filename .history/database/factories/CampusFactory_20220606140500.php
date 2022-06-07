<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CampusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'    => \App\Models\Campus::factory(Campus::class)->create()->id,
            'name'  => $this->faker->name,
        ];
    }
}
