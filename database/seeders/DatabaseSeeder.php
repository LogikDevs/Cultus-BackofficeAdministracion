<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user;
use App\Models\country;
use App\Models\interest;
use App\Models\follows;
use Laravel\Passport\Client;

class DatabaseSeeder extends Seeder
{

    public function run()
    {   
        $this->call(countrySeeder::class);
        $this->call(userSeeder::class);
        $this->call(interestSeeder::class);
        $this->call(likesSeed::class);
        $this->call(followsSeeder::class);
        $this->call(EventsSeeder::class);
        $this->call(EventInterestsSeeder::class);
        $this->call(ParticipantsSeeder::class);
        $this->call(chatSeeder::class); 
        $this->call(groupsSeeder::class);
        $this->call(integratesSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(MultimediaPostSeeder::class);
        $this->call(CharacterizesSeeder::class);
        $this->call(VotesSeeder::class);
        $this->call(CommentsSeeder::class);
    }
}
