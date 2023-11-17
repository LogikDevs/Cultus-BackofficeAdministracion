<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use App\Models\country;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Client;
class prodSeeder extends Seeder
{

    public function run()
    {
        DB::table('interest_label')->insert([
            ['interest' => 'arte'],
            ['interest' => 'gastronomia'],
            ['interest' => 'deportes'],
            ['interest' => 'historia'],
            ['interest' => 'musica'],
            ['interest' => 'jardineria'],
            ['interest' => 'tecnologia'],
            ['interest' => 'astronomia'],
            ['interest' => 'lectura'],
            ['interest' => 'cine'],
        ]);
        \App\Models\user::factory(1)
            ->has(\App\Models\country::factory(), 'homeland')
            ->has(\App\Models\country::factory(), 'residence')
            ->count(1)
            ->create([
                "name" => "usuario",
                "email" => "usuario@email.com",
                'password' => Hash::make("12345678")
            ]);
            Client::create([
                'id' => 100,
                'name' => 'Tests',
                'secret' => "wsBa0mp4jwSTYssUGHX5xoqD9IC0X95Gfpg0w3uY",
                'redirect' => 'http://localhost',
                'provider' => 'users',
                'personal_access_client' => false,
                'password_client' => true,
                'revoked' => false
            ]);
    }
}
