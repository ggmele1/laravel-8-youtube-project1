<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Laravel 8 (New)
Route::get('/products', [ProductsController::class, 'index']);

// Passing in data to controller
// Route::get('/products/{name}', [ProductsController::class, 'show']);

// Passing in params with constraints
Route::get('products/{name}/{id}',
    [ProductsController::class, 'show'])->where([
        'name' => '[a-z]+',
        'id' => '[0-9]+'
    ]);


Route::get('/posts', [PostsController::class, 'index']);