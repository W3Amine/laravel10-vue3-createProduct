<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Collection;


class CategoryRepository
{
    /**
     * Get all Categories.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Category::all();
    }

    public function getAllWithProducts(): Collection
    {
         return  Category::with('products')->get();
    }

    /**
     * Get a Category by ID.
     *
     * @param int $id
     * @return Category
     */
    public function getById(int $id): Category
    {
        return Category::findOrFail($id);
    }


 
    /**
     * Delete a product.
     *
     * @param int $id
     * @return void
     */
    public function delete(int $id): void
    {
        $category = $this->getById($id);
        $category->delete();
    }
}
