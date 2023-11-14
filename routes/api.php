<?php

use App\Http\Controllers\API\CategoriesController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/




Route::post('products', [ProductController::class, 'all']);
Route::post('categories', [CategoriesController::class, 'all']);

// auth
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login_api']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'fetchuser']);
    Route::post('/user/update', [AuthController::class, 'updateUser']);
});
