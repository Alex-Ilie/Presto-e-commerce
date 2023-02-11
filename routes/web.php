<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;




Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::get('/products/index', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/show/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('/category/show/{category}', [ProductController::class, 'showCategory'])->name('showCategory');

