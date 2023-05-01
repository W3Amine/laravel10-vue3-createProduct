<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
 

        // Seed the categories table
        Category::factory()->count(20)->create();

        // Seed the products table
        Product::factory()
            ->count(50)
            ->hasAttached(Category::inRandomOrder()->limit(3)->get())
            ->create();
            
    }
}
