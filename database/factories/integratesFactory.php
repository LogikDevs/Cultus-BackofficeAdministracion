<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IntegratesFactory extends Factory
{

    public function definition()
    {
        return [
            'id_user' => \App\Models\User::factory(),
            'id_group' => \App\Models\groups::factory(),
            'rol' => $this->faker->randomElement(['Admin', 'Member']),
        ];
    }
}
