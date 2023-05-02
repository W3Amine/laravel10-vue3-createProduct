<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CategoryController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// resource api controller for products
Route::apiResource('/products', ProductController::class);



// products filter by categories
Route::get('/productsOfCategories', [ProductController::class, 'GetAllProductsOfCategories']);




// resource api controller for products
Route::apiResource('/categories', CategoryController::class);
