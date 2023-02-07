<?php

use App\Http\Controllers\Admin\Account\AuthController;
use App\Http\Controllers\Admin\Account\UserController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\University\DirectionController;
use App\Http\Controllers\Admin\University\EducationTypeController;
use App\Http\Controllers\Admin\University\UniversityController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/**
 * MAIN ROUTES
 */
Route::get('/', [MainController::class, 'index']);
Route::get('/poisk', [MainController::class, 'search']);
Route::get('/universitety', [MainController::class, 'universities']);
Route::get('/universitet/{university_slug}', [MainController::class, 'university']);
Route::get('/otzyvy', [MainController::class, 'reviews']);
Route::get('/otzyv/{review_slug}', [MainController::class, 'review']);
Route::get('/dobavit-otzyv/{university_slug}', [MainController::class, 'review_add']);
Route::get('/posti', [MainController::class, 'articles']);
Route::get('/post/{article_slug}', [MainController::class, 'article']);
Route::get('/o-service', [MainController::class, 'about']);
Route::get('/faq', [MainController::class, 'faq']);
Route::get('/uchebnim-zavedeniyam', [MainController::class, 'educational']);
Route::get('/top-universitety', [MainController::class, 'top']);

/**
 * ADMIN ROUTES
 */
Route::get('admin/', [AuthController::class, 'index']);
Route::get('admin/login', [AuthController::class, 'index']);
Route::post('admin/login', [AuthController::class, 'login']);
Route::get('admin/logout', [AuthController::class, 'logout']);

Route::middleware(['auth.custom'])->group(function (){

    // dashboard
    Route::get('admin/dashboard', [DashboardController::class, 'index']);

    // universities
    Route::get('admin/universities/universities', [UniversityController::class, 'index']);
    Route::post('admin/universities/university', [UniversityController::class, 'store']);
    Route::get('admin/universities/university/{id?}', [UniversityController::class, 'get']);
    Route::put('admin/universities/university/{id}', [UniversityController::class, 'update']);
    Route::delete('admin/universities/university/{id}', [UniversityController::class, 'destroy']);

    // directions
    Route::get('admin/universities/directions', [DirectionController::class, 'index']);
    Route::post('admin/universities/direction', [DirectionController::class, 'store']);
    Route::get('admin/universities/direction/{id?}', [DirectionController::class, 'get']);
    Route::put('admin/universities/direction/{id}', [DirectionController::class, 'update']);
    Route::delete('admin/universities/direction/{id}', [DirectionController::class, 'destroy']);

    // education type
    Route::get('admin/universities/education-types', [EducationTypeController::class, 'index']);
    Route::post('admin/universities/education-type', [EducationTypeController::class, 'store']);
    Route::get('admin/universities/education-type/{id?}', [EducationTypeController::class, 'get']);
    Route::put('admin/universities/education-type/{id}', [EducationTypeController::class, 'update']);
    Route::delete('admin/universities/education-type/{id}', [EducationTypeController::class, 'destroy']);

    // users
    Route::get('admin/users', [UserController::class, 'index']);
    Route::post('admin/user', [UserController::class, 'store']);
    Route::get('admin/user/{id?}', [UserController::class, 'get']);
    Route::put('admin/user/{id}', [UserController::class, 'update']);
    Route::delete('admin/user/{id}', [UserController::class, 'destroy']);

});
