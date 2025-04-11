<?php

use Illuminate\Support\Facades\Route;
use Modules\Products\Http\Controllers\ProductsController;

Route::middleware(['auth'])->prefix('products')->group(function () {
    Route::get('/', [ProductsController::class, 'index'])->name('products.index');
    Route::resource('products', ProductsController::class)->names('products');
});
