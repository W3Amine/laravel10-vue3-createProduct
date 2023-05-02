<?php

use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< Updated upstream
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CategoryController;


=======
>>>>>>> Stashed changes

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// resource api controller for products
Route::apiResource('/products', ProductController::class);

<<<<<<< Updated upstream


// products filter by categories
Route::get('/productsOfCategories', [ProductController::class, 'GetAllProductsOfCategories']);




=======
// products filter by categories
Route::get('/productsOfCategories', [ProductController::class, 'GetAllProductsOfCategories']);

>>>>>>> Stashed changes
// resource api controller for products
Route::apiResource('/categories', CategoryController::class);
