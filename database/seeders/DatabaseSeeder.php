<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\akEminenceGroup\Articles\Article;
use App\akEminenceGroup\Categories\Category;
use App\akEminenceGroup\Users\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Category::factory(2)->create([
        //     'name' => fake('fr')->domainName()
        // ]);


        // for ($i=0; $i < 12 ; $i++) { 

        //     Article::create([
        //         'title' => 'Article '. $i,
        //         'slug' => Str::slug('Article '. $i),
        //         'content' => fake('fr')->text(),
        //         'cover' => fake()->imageUrl()
        //     ]);
        // }

        User::create([
            'name' => 'Super Admin',
            'username' => 'admin',
            'email' => 'eminencegroup95@gmail.com',
            'password' => bcrypt('P@ssword2023'),
        ]);
    }
}