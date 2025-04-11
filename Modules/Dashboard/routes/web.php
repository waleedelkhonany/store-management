<?php

use Illuminate\Support\Facades\Route;
use Modules\Dashboard\app\Http\Controllers\DashboardController;

Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});
