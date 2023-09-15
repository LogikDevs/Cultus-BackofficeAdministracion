<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Events;

class EventsSeeder extends Seeder
{
    public function run()
    {
        Events::factory(100)->create();
    }
}
