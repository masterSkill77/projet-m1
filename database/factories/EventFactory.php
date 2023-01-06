<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'event_name' => $this->faker->name(),
            'event_description' => $this->faker->text(),
            'event_start' => $this->faker->date(),
            'event_end' => $this->faker->date(),
            'event_location' => $this->faker->address(),
            'event_type' => 1
        ];
    }
}
