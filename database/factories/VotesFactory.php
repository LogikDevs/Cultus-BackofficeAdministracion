<?php

namespace Database\Factories;

use App\Models\user;
use App\Models\Post;
use App\Models\Votes;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class VotesFactory extends Factory
{
    public function definition()
    {
        return [
            'fk_id_user' => \App\Models\user::factory(),
            'fk_id_post' => \App\Models\Post::factory(),
            'vote' => $this->faker->boolean
        ];
    }
}
