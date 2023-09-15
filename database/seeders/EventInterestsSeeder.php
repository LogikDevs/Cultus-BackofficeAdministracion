<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EventInterests;

class EventInterestsSeeder extends Seeder
{
    public function run()
    {
        EventInterests::factory(100)->create();
    }
}
