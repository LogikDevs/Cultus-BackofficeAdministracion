<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comments;

class CommentsSeeder extends Seeder
{
    public function run()
    {
        Comments::factory(100)->create();
    }
}
