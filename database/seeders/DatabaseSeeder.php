<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Raisa Ainun',
        //     'email' => 'raisaisnaainun@gmail.com',
        //     'password' => bcrypt('1345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programing',
            'slug' => 'programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'tittle' => 'Judul Pertama',
        //     'slug' => 'Judul-Pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur quam veritatis impedit sed iusto maxime natus, reprehenderit minima minus obcaecati.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur quam veritatis impedit sed iusto maxime natus, reprehenderit minima minus obcaecati. Atque error cum ratione sequi. Ipsam provident pariatur quam! Delectus nesciunt, doloremque impedit odit recusandae earum praesentium obcaecati voluptate odio distinctio reprehenderit eveniet ab cum maiores rem accusantium nulla quidem!',
        //     'category_id' => 1,
        //     'user_id' =>1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Kedua',
        //     'slug' => 'Judul-Ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur quam veritatis impedit sed iusto maxime natus, reprehenderit minima minus obcaecati.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur quam veritatis impedit sed iusto maxime natus, reprehenderit minima minus obcaecati. Atque error cum ratione sequi. Ipsam provident pariatur quam! Delectus nesciunt, doloremque impedit odit recusandae earum praesentium obcaecati voluptate odio distinctio reprehenderit eveniet ab cum maiores rem accusantium nulla quidem!',
        //     'category_id' => 1,
        //     'user_id' =>1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Ketiga',
        //     'slug' => 'Judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur quam veritatis impedit sed iusto maxime natus, reprehenderit minima minus obcaecati.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur quam veritatis impedit sed iusto maxime natus, reprehenderit minima minus obcaecati. Atque error cum ratione sequi. Ipsam provident pariatur quam! Delectus nesciunt, doloremque impedit odit recusandae earum praesentium obcaecati voluptate odio distinctio reprehenderit eveniet ab cum maiores rem accusantium nulla quidem!',
        //     'category_id' => 2,
        //     'user_id' =>1
        // ]);
    }
}
