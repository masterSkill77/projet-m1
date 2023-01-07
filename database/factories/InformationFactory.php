<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'info_libelle' => $this->faker->company(),
            'info_description' => $this->faker->paragraph(),
        ];
    }
}
