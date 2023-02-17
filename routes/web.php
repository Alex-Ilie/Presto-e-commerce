<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RevisorController;




Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/products/create', [ProductController::class, 'create'])->middleware('auth')->name('products.create');

Route::get('/products/index', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/show/{product}', [ProductController::class, 'show'])->middleware('auth')->name('products.show');

Route::get('/category/show/{category}', [ProductController::class, 'showCategory'])->name('showCategory');

Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');


Route::patch('/accetta/product/{product}', [RevisorController::class, 'acceptProduct'])->middleware('isRevisor')->name('revisor.accept_product');
Route::patch('/rifiuta/product/{product}', [RevisorController::class, 'rejectProduct'])->middleware('isRevisor')->name('revisor.reject_product');
Route::patch('/rivedi/product/{product}', [RevisorController::class, 'rivediProduct'])->middleware('isRevisor')->name('revisor.rivedi_product');


Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

Route::get('/richiesta/revisore/form', [PublicController::class, 'formRevisor'])->name('form.revisor');


Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

Route::get('/ricerca/product', [PublicController::class, 'searchProducts'])->name('products.search');

Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');





