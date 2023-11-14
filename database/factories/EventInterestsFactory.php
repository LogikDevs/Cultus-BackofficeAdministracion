<?php

namespace Database\Factories;

use App\Models\interest;
use App\Models\Events;
use App\Models\EventInterests;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;

class EventInterestsFactory extends Factory
{
    public function definition()
    {
        return [
            'fk_id_event' => \App\Models\Events::factory(),
            'fk_id_label' => \App\Models\interest::factory()
        ];
    }
}
