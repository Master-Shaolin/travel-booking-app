<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => null,
            'password' => '$2y$10$s7BMrIcm2.YyO31IAiWLw.631az8oQ9pgLMSd2qG5ue4gIgDZt2vC', // hola123
            'phone' => $this->faker->phoneNumber(),
            'country' => $this->faker->country(30),
            'city' => $this->faker->city(),
            'profile_pic' => null,
            'active' => 1,
            'role_id' => rand(1,3)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
