<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category::create([
        //     'name' => 'Teknik Pengambilan Keputusan',
        //     'slug' => 'Teknik-Pengambilan-Keputusan'
        // ]);

        // Post::create([
        //     'title' => 'Metode Topsis',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'Metode-Topsis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium illo unde ut saepe, aliquid quo facilis eum officiis expedita vel suscipit nesciunt nemo culpa possimus, repudiandae, voluptatibus tempora temporibus ipsa.'
        // ]);

        $this->call([CategorySeeder::class,UserSeeder::class]);
        Post::factory(120)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}