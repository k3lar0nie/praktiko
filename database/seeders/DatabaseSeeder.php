<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Str;

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
        
        // DB::table('posts')->insert([[
        //     'title' => 'нозвание',
        //     'slug' => 'noZVanie',
        //     'text' => 'ну текст какой то хз',
        // ],
        // [
        //     'title' => 'нозвание 2',
        //     'slug' => 'noZVanie 2',
        //     'text' => 'ну текст какой то хз 2',
        // ]]);
        // DB::table('users')->insert([[
        //     'name' => 'pycanov',
        //     'email' => 'sixseven@pisat.dva',
        //     'password' => '123123',
        // ],
        // [
        //     'name' => 'karapet',
        //     'email' => 'iam@swag.com',
        //     'password' => 'shahmati', 
        // ]]);   
    
        $this->call([
            UserSeeder::class,
            PostSeeder::class,
        ]);
    }
}
