<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
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
            'legal_representative' => $this->faker->name(),
            'email' => $this->faker->unique()->companyEmail(),
            'phone' => $this->faker->phoneNumber(),
            'country' => $this->faker->country(30),
            'city' => $this->faker->city(),
            'address' => $this->faker->address(),
            'photos' => null,
            'rating' => rand(3,5),
            'active' => 1,
            'featured' => rand(0,1),
            'hotel_type_id' => rand(1,6),
            'user_id'  => rand(100,150),
        ];
    }
}
