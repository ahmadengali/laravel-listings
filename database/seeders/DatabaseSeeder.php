<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);


        /*Listing::create([
            'title' => 'laravel senior Developer',
                'tags' => 'laravel, javascript',
                'company' => 'acme corp',
                'location' => 'Boston, Ma',
                'email' => 'email1@email.com',
                'website' => 'https://www.acme.com',
                'description' => 'Lorem Ipsum is simply
                dummy text of the printing and typesetting industry
                . Lorem Ipsum has been the industry
                s standard dummy text ever since the 1500s, '
            ]);
            Listing::create([
                'title' => 'Full-Stack-Engineer',
                'tags' => 'laravel, backend,api',
                'company' => 'Stark Industries',
                'location' => 'new york, NY',
                'email' => 'email2@email.com',
                'website' => 'https://www.starkIndustries.com',
                'description' => 'Lorem Ipsum is simply
                dummy text of the printing and typesetting industry
                . Lorem Ipsum has been the industry
                s standard dummy text ever since the 1500s, '
            ]);*/


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
