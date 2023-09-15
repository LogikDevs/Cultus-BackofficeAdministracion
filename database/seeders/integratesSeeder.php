<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\integrates;

class integratesSeeder extends Seeder
{
    public function run()
    {
        integrates::factory(100)->create();
    }
}
