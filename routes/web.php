<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// auth route
Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');


// end auth route

// dashboard
Route::prefix('/dashboard')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::prefix('/master')->group(function () {
        Route::get('/', [DashboardController::class, 'masterPages']);
        Route::prefix('/produk')->group(function () {
            Route::get('/', [DashboardController::class, 'masterProduk']);
            Route::prefix('/kategori')->group(function () {
                Route::get('/', [DashboardController::class, 'kategoriProduk']);
            });
        });
    });

});

Route::get('/', function () {
    return Inertia::render('Index');
});
