<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(4)->create();
        Category::create([
            'name' => 'Basis Data',
            'slug' => 'basis-data',
            'color' => 'yellow'
        ]);

        Category::create([
            'name' => 'Keamanan Jaringan',
            'slug' => 'keamanan-jaringan',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Internet Of Things',
            'slug' => 'internet-of-things',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'Unreal Engine 5',
            'slug' => 'unreal-engine-5',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Framework',
            'slug' => 'framework',
            'color' => 'gray'
        ]);

        Category::create([
            'name' => 'Teknik Pengambilan Keputusan',
            'slug' => 'teknik-pengambilan-keputusan',
            'color' => 'slate'
        ]);
    }
}
