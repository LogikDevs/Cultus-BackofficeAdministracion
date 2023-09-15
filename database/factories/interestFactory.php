<?php

namespace Database\Factories;

use App\Models\interest;
use Illuminate\Database\Eloquent\Factories\Factory;

final class interestFactory extends Factory
{
    public function definition(): array
    {
        return [
            'interest' =>$this->faker->word()
        ];
    }
}
