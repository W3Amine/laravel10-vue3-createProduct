<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{


    
        /**
     * The Category repository instance.
     *
     * @var CategoryRepository
     */
    protected CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }





    
    /**
     * Display a listing of the resource.
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
