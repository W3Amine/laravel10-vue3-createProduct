<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('app');
});



// Redirect any path to the app view # To avoid 404 error
// Let vue handle routing # SPA
Route::view('/{any}', 'app')->where('any', '.*');
