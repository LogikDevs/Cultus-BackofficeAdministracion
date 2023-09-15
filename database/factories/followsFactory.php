<?php

namespace Database\Factories;
use App\Models\follows;
use Illuminate\Database\Eloquent\Factories\Factory;

class FollowsFactory extends Factory
{
    
    public function definition()
    {
        return [
            'id_follower' => \App\Models\User::factory(),
            'id_followed' => \App\Models\User::factory(),
            'friends' => $this->faker->boolean(),
         ];
    }
}
