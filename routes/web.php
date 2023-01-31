<?php

use App\Http\Controllers\Admin\Account\AuthController;
use App\Http\Controllers\Admin\Account\UserController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\University\UniversityController;
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
Route::get('admin/login', [AuthController::class, 'index']);
Route::post('admin/login', [AuthController::class, 'login']);
Route::get('admin/logout', [AuthController::class, 'logout']);

// error
Route::get('admin/401', [ErrorController::class, 'e401']);

Route::middleware(['auth.custom'])->group(function (){

    // dashboard
    Route::get('admin/dashboard', [DashboardController::class, 'index']);

    // universities
    Route::get('admin/universities', [UniversityController::class, 'index']);
    Route::post('admin/university', [UniversityController::class, 'store']);
    Route::get('admin/university/{id?}', [UniversityController::class, 'get']);
    Route::put('admin/university/{id}', [UniversityController::class, 'update']);
    Route::delete('admin/university/{id}', [UniversityController::class, 'destroy']);

    // users
    Route::get('admin/users', [UserController::class, 'index']);
    Route::post('admin/user', [UserController::class, 'store']);
    Route::get('admin/user/{id}', [UserController::class, 'get']);
    Route::put('admin/user/{id}', [UserController::class, 'update']);
    Route::delete('admin/user/{id}', [UserController::class, 'destroy']);

});
