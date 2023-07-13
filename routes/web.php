<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Data\KonfigurasiDataController;
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
            // Katgeori Produk
            Route::prefix('/kategori')->group(function () {
                Route::get('/', [DashboardController::class, 'kategoriProduk']);
            });
            // Brand Produk
            Route::prefix('/brand')->group(function () {
                Route::get('/', [DashboardController::class, 'brandProduk']);
            });
        });
        Route::prefix('/servis')->group(function () {
            Route::get('/', [DashboardController::class, 'masterServis']);
        });
        Route::prefix('/customer')->group(function () {
            Route::get('/', [DashboardController::class, 'masterCustomer']);
        });
    });

    Route::prefix('/konfigurasi')->group(function () {
        Route::get('/', [DashboardController::class, 'konfigurasiPages']);
        Route::get('/company', [DashboardController::class, 'konfigurasiCompany']);
    });

    Route::prefix('/pages')->group(function () {
        Route::get('/', [DashboardController::class, 'staticPages']);
    });

    Route::get('blog-news', [DashboardController::class, 'blogPages']);



    // Ruote Action
    Route::prefix('/master')->group(function () {
        Route::prefix('/produk')->group(function () {
            // Kategori Produk
            Route::post('/create-kategori-produk', [MasterDataController::class, 'createKategoriData']);
            Route::post('/delete-kategori-produk', [MasterDataController::class, 'deleteKategoriData']);
            Route::post('/update-kategori-data/{id}', [MasterDataController::class, 'updateDataKategoriData']);
            Route::delete('/delete-kategori/{id}', [MasterDataController::class, 'deleteSingleKategoriData']);

            // Brand Produk
            Route::post('/create-brand-produk', [MasterDataController::class, 'createBrandData']);
            Route::post('/delete-brand-produk', [MasterDataController::class, 'deleteBrandData']);
            Route::post('/update-brand-data/{id}', [MasterDataController::class, 'updateDataBrandData']);
            Route::delete('/delete-brand/{id}', [MasterDataController::class, 'deleteSingleBrandData']);

            // Produk
            Route::post('/create-produk', [MasterDataController::class, 'createProdukData']);
            Route::post('/update-produk/{id}', [MasterDataController::class, 'updateProdukData']);
            Route::post('/delete-multi-produk', [MasterDataController::class, 'deleteMultipleProdukData']);
            Route::delete('/delete-produk/{id}', [MasterDataController::class, 'deleteProduk']);
            // Delete Images Produk
            Route::delete('/delete-images-produk/{id}', [MasterDataController::class, 'deleteImagesProduk']);
        });

        Route::prefix('/servis')->group(function () {
            // Create Servis Data
            Route::post('/create-servis', [MasterDataController::class, 'createServisData']);
            Route::post('/update-servis/{id}', [MasterDataController::class, 'updateServisData']);
            Route::post('/delete-multi-servis', [MasterDataController::class, 'deleteMultipleServisData']);
            Route::delete('/delete-servis/{id}', [MasterDataController::class, 'deleteServisData']);
        });

        Route::prefix('/company')->group(function () {
            // Create Servis Data
            Route::post('/create-servis', [MasterDataController::class, 'createServisData']);
            Route::post('/update-servis/{id}', [MasterDataController::class, 'updateServisData']);
            Route::post('/delete-multi-servis', [MasterDataController::class, 'deleteMultipleServisData']);
            Route::delete('/delete-servis/{id}', [MasterDataController::class, 'deleteServisData']);
        });

        Route::prefix('/customer')->group(function () {
            // Create Servis Data
            Route::post('/create-customer', [MasterDataController::class, 'createCustomerData']);
            Route::post('/update-customer/{id}', [MasterDataController::class, 'updateCustomerData']);
            Route::post('/delete-multi-customer', [MasterDataController::class, 'deleteMultipleCustomerData']);
            Route::delete('/delete-customer/{id}', [MasterDataController::class, 'deleteCustomerData']);
        });
    });

    Route::prefix('/konfigurasi')->group(function () {
        Route::prefix('/company-info')->group(function () {
            Route::post('/', [KonfigurasiDataController::class, 'updateCompanyInfo']);
        });
    });
    Route::prefix('/static-content')->group(function () {
        Route::post('/create-data', [MasterDataController::class, 'createStaticPages']);
        Route::post('/update-data/{id}', [MasterDataController::class, 'updateStaticPages']);
        Route::delete('/delete-data/{id}', [MasterDataController::class, 'deleteStaticData']);
    });
    Route::prefix('/blog-news')->group(function () {
        Route::post('/create-data', [MasterDataController::class, 'createBlogNews']);
        Route::post('/update-data/{id}', [MasterDataController::class, 'updateBlogNews']);
        Route::delete('/delete-data/{id}', [MasterDataController::class, 'deleteBlogNews']);
    });
});


Route::get('/', function () {
    return Inertia::render('Index');
});
