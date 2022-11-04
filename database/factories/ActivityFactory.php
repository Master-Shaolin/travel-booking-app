<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'description' => $this->faker->realText($this->faker->numberBetween(10, 100)),
            'price' => $this->faker->randomFloat(2,20,200),
            'max_people' => rand(1,10),
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'photos' => null,
            'language' => json_encode(['language' => $this->faker->languageCode()]),
            'duration' => rand(1,24),
            'included' => null,
            'accessibility' => rand(0,1),
            'pets' => rand(0,1),
            'rating' => rand(3,5),
            'meeting_point' => null,
            'active' => 1,
            'featured' => rand(0,1),
            'user_id' => rand(150,200)
        ];
    }
}
