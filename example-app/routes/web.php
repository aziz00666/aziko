<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index']);
