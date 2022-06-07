<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SortieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Sortie::class;


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
        'lieu_id' => \App\Models\Lieu::factory()->create()->id,
        'campus_id' => \App\Models\Campus::factory()->create()->id,
        'user_id' => \App\Models\User::factory()->create()->id,
        'etat_id' => \App\Models\Etat::factory()->create()->id,
        ];
    }
}
