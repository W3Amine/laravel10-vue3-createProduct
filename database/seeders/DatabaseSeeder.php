<?php

namespace Database\Seeders;

<<<<<<< Updated upstream
use App\Models\Product;
=======
>>>>>>> Stashed changes
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
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
