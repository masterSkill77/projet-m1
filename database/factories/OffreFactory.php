<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OffreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return
            ["offre_title" => $this->faker->company(), "offre_description" => $this->faker->paragraph(), "offre_number_need" => $this->faker->numberBetween(1, 5), "offre_type" => "CDI", "offre_niveau" => "BAC + 5", "partenaire_id" => 1];
    }
}
