<?php

use App\Http\Controllers\Admin\Account\AuthController;
use App\Http\Controllers\Admin\Account\UserController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/**
 * MAIN ROUTES
 */
Route::get('/', [MainController::class, 'index']);

/**
 * ADMIN ROUTES
 */
Route::get('admin/', [AuthController::class, 'index']);
Route::post('admin/', [AuthController::class, 'login']);
Route::post('admin/login', [AuthController::class, 'login']);

Route::middleware(['auth.session'])->group(function (){

    // dashboard
    Route::get('admin/dashboard', [DashboardController::class, 'index']);

    // users
    Route::get('admin/users', [UserController::class, 'index']);
    Route::post('admin/user', [UserController::class, 'store']);
    Route::get('admin/user/{id}', [UserController::class, 'get']);
    Route::put('admin/user/{id}', [UserController::class, 'update']);
    Route::delete('admin/user/{id}', [UserController::class, 'destroy']);

});
