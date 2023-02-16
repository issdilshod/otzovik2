<?php

use App\Http\Controllers\Admin\Blog\CommentController;
use App\Http\Controllers\Admin\Review\ReviewController;
use App\Http\Controllers\Admin\Subscribe\SubscribeController;
use Illuminate\Support\Facades\Route;

Route::post('subscribe', [SubscribeController::class, 'api_store']);

Route::post('review', [ReviewController::class, 'api_store']);

Route::post('comment', [CommentController::class, 'api_store']);