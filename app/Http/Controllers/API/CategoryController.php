<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    /**
     * The Category repository instance.
     */
    protected CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a all listing of the resource.
     */
    public function index()
    {
        return $this->categoryRepository->getAll();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product)
    {
        $this->categoryRepository->delete($product);

        return response()->noContent();
    }
}
