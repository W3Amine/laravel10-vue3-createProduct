<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{

    
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'image' => 'storage/ProductsImages/' . $this->faker->image('public/storage/ProductsImages/', 640, 480, null, false),
        ];
    
    }


    public function configure()
    {
        return $this->afterCreating(function (Product $product) {
            $categories = Category::inRandomOrder()->limit(3)->get();
            $product->categories()->sync($categories);
        });
    }

    
}
