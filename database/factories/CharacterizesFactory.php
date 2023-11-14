<?php

namespace Database\Factories;

use App\Models\interest;
use App\Models\Post;
use App\Models\Characterizes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;

class CharacterizesFactory extends Factory
{
    public function definition()
    {
        return [
            'fk_id_post' =>  \App\Models\post::factory(),
            'fk_id_label' =>  \App\Models\interest::factory()
        ];
    }
}
