<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\country;

class countrySeeder extends Seeder
{
    public function run()
    {
        country::factory(100)->create();
    }
}
