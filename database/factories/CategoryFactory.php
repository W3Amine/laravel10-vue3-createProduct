<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'parent_id' => Category::inRandomOrder()->first(),
        ];
    }
}
