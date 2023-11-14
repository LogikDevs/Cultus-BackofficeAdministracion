<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;

class PostFactory extends Factory
{
    public function definition()
    {
        return [
            'fk_id_user' =>  \App\Models\user::factory(),
            'fk_id_event' =>  \App\Models\Events::factory(),
            'text' => $this->faker->paragraph(255),
            'latitud' => $this->faker->latitude(),
            'longitud' => $this->faker->longitude(),
            'date' => $this->faker->dateTime()
        ];
    }
}
