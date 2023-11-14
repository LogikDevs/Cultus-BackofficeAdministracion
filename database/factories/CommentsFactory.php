<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentsFactory extends Factory
{
    public function definition()
    {
        return [
            'fk_id_user' =>  \App\Models\user::factory(),
            'fk_id_post' =>  \App\Models\Post::factory(),
            'text' => $this->faker->text()
        ];
    }
}
