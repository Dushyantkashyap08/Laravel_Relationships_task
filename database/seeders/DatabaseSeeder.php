<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UserSeeder::class);
        \App\Models\User::factory(10)->create(); //calling the UserFactory for inserting 10 fake user details
        \App\Models\Post::factory(50)->create(); //calling the PostFactory here insertind 50 fale records for user_id->1
        \App\Models\Category::factory(10)->create(); 

        \App\Models\Country::factory(10)->create(); 
        \App\Models\State::factory(100)->create(); 
        \App\Models\City::factory(500)->create(); 
    }
}
