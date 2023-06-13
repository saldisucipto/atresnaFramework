<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Data\MasterDataController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// auth route
Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');


// end auth route

// dashboard
Route::prefix('/dashboard')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);


    // Route View and Get Data
    Route::prefix('/master')->group(function () {
        Route::get('/', [DashboardController::class, 'masterPages']);
        Route::prefix('/produk')->group(function () {
            Route::get('/', [DashboardController::class, 'masterProduk']);
            Route::prefix('/kategori')->group(function () {
                Route::get('/', [DashboardController::class, 'kategoriProduk']);
            });
        });
    });



    // Ruote Action
    Route::prefix('/master')->group(function () {
        Route::prefix('/produk')->group(function () {
            Route::post('/create-kategori-produk', [DashboardController::class, 'createKategoriData']);
            Route::post('/delete-kategori-produk', [DashboardController::class, 'deleteKategoriData']);
        });
    });

});

Route::get('/', function () {
    return Inertia::render('Index');
});
