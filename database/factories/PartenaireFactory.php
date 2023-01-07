<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PartenaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return
            ["partenaire_name" => $this->faker->company(), "partenaire_location" => $this->faker->address(), "partenaire_phone" => $this->faker->phoneNumber(), "partenaire_mail" => $this->faker->email(), "partenaire_responsable" => $this->faker->name()];
    }
}
