<?php

namespace Database\Seeders;
use App\Models\user;
use App\Models\country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Client;
class userSeeder extends Seeder
{
    
    public function run()
    {
        {
          
            \App\Models\user::factory()
            ->has(Country::factory(), 'homeland')
            ->has(Country::factory(), 'residence')
            ->count(100)
            ->create();     

            \App\Models\User::factory(1)
            ->has(Country::factory(), 'homeland')
            ->has(Country::factory(), 'residence')
            ->count(1)
            ->create([
                "name" => "usuario",
                "email" => "usuario@email.com",
                'password' => Hash::make("12345678")
            ]);
        }
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
