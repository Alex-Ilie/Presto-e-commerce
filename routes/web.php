<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;




Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
