<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'image' => 'https://i.ibb.co/4py4Hvy/vue-logo.png',
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
