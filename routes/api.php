<?php

use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// resource api controller for products
Route::apiResource('/products', ProductController::class);

// products filter by categories
Route::get('/productsOfCategories', [ProductController::class, 'GetAllProductsOfCategories']);

// resource api controller for products
Route::apiResource('/categories', CategoryController::class);
