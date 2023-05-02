<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Collection;


class CategoryRepository
{
    /**
     * Get all Categories.
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
     */
    public function getById(int $id): Category
    {
        return Category::findOrFail($id);
    }


 
    /**
     * Delete a product.
     */
    public function delete(int $id): void
    {
        $category = $this->getById($id);
        $category->delete();
    }
}
