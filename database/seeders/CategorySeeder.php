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
            'slug' => 'basis-data'
        ]);

        Category::create([
            'name' => 'Keamanan Jaringan',
            'slug' => 'keamanan-jaringan'
        ]);

        Category::create([
            'name' => 'Internet Of Things',
            'slug' => 'internet-of-things'
        ]);

        Category::create([
            'name' => 'Unreal Engine 5',
            'slug' => 'unreal-engine-5'
        ]);

        Category::create([
            'name' => 'Framework',
            'slug' => 'framework'
        ]);

        Category::create([
            'name' => '10 Teknik Pengambilan Keputusan Paling Populer',
            'slug' => '10-teknik-pengambilan-keputusan-paling-populer'
        ]);
    }
}
