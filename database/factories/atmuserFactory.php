<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class atmuserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'username' => $this->faker->username,
            'password' => $this->faker->password,
            'balance' => 3000,
        ];
    }
}
