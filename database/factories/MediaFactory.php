<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'filename' => 'string_beard',
            'ext' => $this->faker->fileExtension(),
            'info_id' => $this->faker->numberBetween(1, 5)
        ];
    }
}
