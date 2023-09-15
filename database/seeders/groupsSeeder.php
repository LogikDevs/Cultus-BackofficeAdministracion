<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class groupsSeeder extends Seeder
{
    public function run()
    {
        \App\Models\groups::factory()->create([
            "id_group" => "1",
            "name" => "grupoTest",
        ]);
        \App\Models\groups::factory()->count(100)->create();      
    }
}
