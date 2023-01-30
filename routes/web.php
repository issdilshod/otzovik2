<?php

use App\Http\Controllers\Account\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// main routes
Route::get('/', [MainController::class, 'index']);

// admin routes
Route::get('admin/login', [AuthController::class, 'login']);

// protected routes
Route::middleware(['auth.session'])->group(function (){

    // dashboard
    Route::get('admin/', [DashboardController::class, 'index']);
    Route::get('admin/dashboard', [DashboardController::class, 'index']);

    // users
    Route::get('admin/users', [UserController::class, 'index']);
    Route::post('admin/user', [UserController::class, 'store']);
    Route::get('admin/user/{id}', [UserController::class, 'get']);
    Route::put('admin/user/{id}', [UserController::class, 'update']);
    Route::delete('admin/user/{id}', [UserController::class, 'destroy']);

});
