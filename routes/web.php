<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Detail\DetailController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('{code}')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

    Route::get('/categories/{slug}', [ProductController::class, 'getProductByCategory'])->name('category.products');

    Route::get('/products', [ProductController::class, 'filterProduct']);

    Route::get('/products/{slug}', [DetailController::class, 'index'])->name('product.detail');
});