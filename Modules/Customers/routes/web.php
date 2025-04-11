<?php

use Illuminate\Support\Facades\Route;
use Modules\Customers\Http\Controllers\CustomersController;

Route::middleware(['auth', 'verified'])->prefix('customers')->group(function () {
    Route::resource('customers', CustomersController::class)->names('customers');
});
