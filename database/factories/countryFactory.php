<?php

namespace Database\Factories;

use App\Models\country;
use Illuminate\Database\Eloquent\Factories\Factory;


final class countryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'country_name' => $this->faker->country()
        ];
    }
}
