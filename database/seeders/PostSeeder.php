<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('post')->insert([
            'fk_id_user' => 1,
            'fk_id_event' => 1,
            'text' => 'HOLIWI',
            'location' => 1,
            'date' => date('d-m-y H:i')
        ]);

        Post::factory(100)->create();
    }
}
