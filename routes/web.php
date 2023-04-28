<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// auth route
Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');


// end auth route

// dashboard
Route::prefix('/dashboard')->middleware('auth')->group(function () {
    Route::get('/', );

});

Route::get('/', function () {
    return Inertia::render('Index');
});
