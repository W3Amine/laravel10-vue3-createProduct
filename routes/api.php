<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// resource api controller for products
Route::apiResource('/products', ProductController::class);

//this route is used to bring all the products that belong to one or more categories
//when the user filter with categories he will get the products of each category he select
Route::get('/productsOfCategories', [ProductController::class, 'GetAllProductsOfCategories']);



// resource api controller for products
Route::apiResource('/categories', CategoryController::class);