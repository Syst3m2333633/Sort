<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SortieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'name'  => $this->faker->name,
        'dateHeureDebut'  => $this->faker->dateTime,
        'duree'  => $this->faker->randomNumber,
        'dateLimiteInscription'  => $this->faker->dateTime,
        'nbInscriptionsMax'  => $this->faker->randomNumber,
        'infosSortie'  => $this->faker->text,
        'photo'  => $this->faker->imageUrl,
        'etat' => $this->faker->randomElement(['En attente', 'En cours', 'Terminée']),
        'lieu_id' => $this->faker->randomNumber,
        'campus_id' => $this->faker->randomNumber,
        'user_id' => \App\Models\User::factory()->create()->id,

        'etat_id' => $this->faker->randomNumber,
        ];
    }
}
