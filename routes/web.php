<?php

use App\Http\Controllers\Admin\Account\AuthController;
use App\Http\Controllers\Admin\Account\UserController;
use App\Http\Controllers\Admin\Blog\ArticleController;
use App\Http\Controllers\Admin\Blog\CommentController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Platform\PlatformController;
use App\Http\Controllers\Admin\Review\ReviewController;
use App\Http\Controllers\Admin\Setting\CityController;
use App\Http\Controllers\Admin\Setting\SettingController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/**
 * MAIN ROUTES
 */
Route::get('/', [MainController::class, 'index']);

Route::get('/poisk', [MainController::class, 'search']);
Route::get('/poisk/{slug1?}/{slug2?}/{slug3?}/{slug4?}/{slug5?}', [MainController::class, 'search']);

Route::get('/platformi', [MainController::class, 'platforms']);
Route::get('/platformi/{slug1?}/{slug2?}/{slug3?}/{slug4?}', [MainController::class, 'platforms']);
Route::get('/platforma/{platform_slug?}', [MainController::class, 'platform']);
Route::get('/platforma/{platform_slug?}/{slug1?}', [MainController::class, 'platform']);
Route::get('/dobavit-platformu', [MainController::class, 'platform_add']);

Route::get('/otzyvy', [MainController::class, 'reviews']);
Route::get('/otzyvy/{slug1?}', [MainController::class, 'reviews']);
Route::get('/otzyv/{review_number?}', [MainController::class, 'review']);
Route::get('/dobavit-otzyv/{platform_slug?}', [MainController::class, 'review_add']);

Route::get('/posti', [MainController::class, 'articles']);
Route::get('/posti/{slug1?}', [MainController::class, 'articles']);
Route::get('/post/{article_slug}', [MainController::class, 'article']);

Route::get('/o-service', [MainController::class, 'about']);
Route::get('/faq', [MainController::class, 'faq']);
Route::get('/top-platformi', [MainController::class, 'top']);

Route::get('/legal', [MainController::class, 'legal']);
Route::get('/policy', [MainController::class, 'policy']);

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

    // platforms
    Route::get('admin/platforms', [PlatformController::class, 'index']);
    Route::post('admin/platform', [PlatformController::class, 'store']);
    Route::get('admin/platform/{id?}', [PlatformController::class, 'get']);
    Route::put('admin/platform/{id}', [PlatformController::class, 'update']);
    Route::delete('admin/platform/{id}', [PlatformController::class, 'destroy']);

    // reviews
    Route::get('admin/reviews', [ReviewController::class, 'index']);
    Route::post('admin/review', [ReviewController::class, 'store']);
    Route::get('admin/review/{id?}', [ReviewController::class, 'get']);
    Route::put('admin/review/{id}', [ReviewController::class, 'update']);
    Route::delete('admin/review/{id}', [ReviewController::class, 'destroy']);

    // articles
    Route::get('admin/blog/articles', [ArticleController::class, 'index']);
    Route::post('admin/blog/article', [ArticleController::class, 'store']);
    Route::get('admin/blog/article/{id?}', [ArticleController::class, 'show']);
    Route::put('admin/blog/article/{id}', [ArticleController::class, 'update']);
    Route::delete('admin/blog/article/{id}', [ArticleController::class, 'destroy']);

    // comments
    Route::get('admin/blog/comments', [CommentController::class, 'index']);
    //Route::post('admin/blog/comment', [CommentController::class, 'store']);
    Route::get('admin/blog/comment/{id?}', [CommentController::class, 'show']);
    Route::put('admin/blog/comment/{id}', [CommentController::class, 'update']);
    Route::delete('admin/blog/comment/{id}', [CommentController::class, 'destroy']);

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

    // setting
    Route::get('/admin/settings/templates/index', [SettingController::class, 'index']);
    Route::get('/admin/settings/templates/search', [SettingController::class, 'search']);
    Route::get('/admin/settings/templates/platforms', [SettingController::class, 'platforms']);
    Route::get('/admin/settings/templates/platform', [SettingController::class, 'platform']);
    Route::get('/admin/settings/templates/reviews', [SettingController::class, 'reviews']);
    Route::get('/admin/settings/templates/review', [SettingController::class, 'review']);
    Route::get('/admin/settings/templates/review_add', [SettingController::class, 'review_add']);
    Route::get('/admin/settings/templates/articles', [SettingController::class, 'articles']);
    Route::get('/admin/settings/templates/about', [SettingController::class, 'about']);
    Route::get('/admin/settings/templates/faq', [SettingController::class, 'faq']);
    Route::get('/admin/settings/templates/educational', [SettingController::class, 'educational']);

});
