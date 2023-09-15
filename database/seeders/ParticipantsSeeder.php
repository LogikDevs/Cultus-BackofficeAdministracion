<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\Participants;

class ParticipantsSeeder extends Seeder
{
    public function run()
    {
        Participants::factory(100)->create();
    }
}
