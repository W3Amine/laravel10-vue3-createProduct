<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Support\Collection;


class ProductRepository
{
    /**
     * Get all products.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Product::all();
    }

    public function getAllWithCategories(): Collection
    {
        return Product::with('categories')->orderBy('created_at', 'desc')->get();
    }

    /**
     * Get a product by ID.
     *
     * @param int $id
     * @return Product
     */
    public function getById(int $id): Product
    {
        return Product::findOrFail($id);
    }


    /**
     * Get all products Of a category or more using IDs.
     *
     */
    public function GetAllProductsOfCategories(array $categoryIds)
    {

        $products = Product::with('categories')->whereHas('categories', function ($query) use ($categoryIds) {
            $query->whereIn('categories.id', $categoryIds);
        })->get();

        return $products;
    }







    /**
     * Create a new product.
     *
     * @param array $data
     * @return Product
     */
    public function create($data, $categoryIds): Product
    {

        $product = Product::create($data);
        $product->categories()->sync($categoryIds);
        return $product;
    }


    /**
     * Delete a product.
     *
     * @param int $id
     * @return void
     */
    public function delete(int $id): void
    {
        $product = $this->getById($id);
        $product->delete();
    }
}