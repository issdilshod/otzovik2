<?php

use App\Http\Controllers\Admin\Account\AuthController;
use App\Http\Controllers\Admin\Account\UserController;
use App\Http\Controllers\Admin\Blog\ArticleController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Review\ReviewController;
use App\Http\Controllers\Admin\Setting\CityController;
use App\Http\Controllers\Admin\Setting\EducationLevelController;
use App\Http\Controllers\Admin\Setting\DirectionController;
use App\Http\Controllers\Admin\Setting\EducationTypeController;
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
Route::get('/otzyv/{review_number}', [MainController::class, 'review']);
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
    Route::get('admin/universities', [UniversityController::class, 'index']);
    Route::post('admin/university', [UniversityController::class, 'store']);
    Route::get('admin/university/{id?}', [UniversityController::class, 'get']);
    Route::put('admin/university/{id}', [UniversityController::class, 'update']);
    Route::delete('admin/university/{id}', [UniversityController::class, 'destroy']);

    // reviews
    Route::get('admin/reviews', [ReviewController::class, 'index']);
    Route::post('admin/review', [ReviewController::class, 'store']);
    Route::get('admin/review/{id?}', [ReviewController::class, 'get']);
    Route::put('admin/review/{id}', [ReviewController::class, 'update']);
    Route::delete('admin/review/{id}', [ReviewController::class, 'destroy']);

    // articles
    Route::get('admin/articles', [ArticleController::class, 'index']);
    Route::post('admin/article', [ArticleController::class, 'store']);
    Route::get('admin/article/{id?}', [ArticleController::class, 'show']);
    Route::put('admin/article/{id}', [ArticleController::class, 'update']);
    Route::delete('admin/article/{id}', [ArticleController::class, 'destroy']);

    // users
    Route::get('admin/users', [UserController::class, 'index']);
    Route::post('admin/user', [UserController::class, 'store']);
    Route::get('admin/user/{id?}', [UserController::class, 'get']);
    Route::put('admin/user/{id}', [UserController::class, 'update']);
    Route::delete('admin/user/{id}', [UserController::class, 'destroy']);

    // cities
    Route::get('admin/settings/cities', [CityController::class, 'index']);
    Route::post('admin/settings/city', [CityController::class, 'store']);
    Route::get('admin/settings/city/{id?}', [CityController::class, 'show']);
    Route::put('admin/settings/city/{id}', [CityController::class, 'update']);
    Route::delete('admin/settings/city/{id}', [CityController::class, 'destroy']);

    // education level
    Route::get('admin/settings/education_levels', [EducationLevelController::class, 'index']);
    Route::post('admin/settings/education_level', [EducationLevelController::class, 'store']);
    Route::get('admin/settings/education_level/{id?}', [EducationLevelController::class, 'show']);
    Route::put('admin/settings/education_level/{id}', [EducationLevelController::class, 'update']);
    Route::delete('admin/settings/education_level/{id}', [EducationLevelController::class, 'destroy']);

    // directions
    Route::get('admin/settings/directions', [DirectionController::class, 'index']);
    Route::post('admin/settings/direction', [DirectionController::class, 'store']);
    Route::get('admin/settings/direction/{id?}', [DirectionController::class, 'get']);
    Route::put('admin/settings/direction/{id}', [DirectionController::class, 'update']);
    Route::delete('admin/settings/direction/{id}', [DirectionController::class, 'destroy']);

    // education type
    Route::get('admin/settings/education-types', [EducationTypeController::class, 'index']);
    Route::post('admin/settings/education-type', [EducationTypeController::class, 'store']);
    Route::get('admin/settings/education-type/{id?}', [EducationTypeController::class, 'get']);
    Route::put('admin/settings/education-type/{id}', [EducationTypeController::class, 'update']);
    Route::delete('admin/settings/education-type/{id}', [EducationTypeController::class, 'destroy']);

});
