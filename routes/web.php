<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class,'index']);
Route::get('register', [MainController::class,'register']);
Route::get('/about', [MainController::class,'about']);
Route::get('/contact', [MainController::class,'contact']);
Route::get('/categories-create', [CategoryController::class,'create']);
Route::post('/categories-create', [CategoryController::class,'save']);
Route::get ('/categories', [CategoryController::class,'index']);
Route::get ('/posts-create', [PostController::class,'create']);
Route::post('/posts-create', [PostController::class,'save_post']);
Route::get ('/posts', [PostController::class,'index']);

Route::get ('/view_post', [PostController::class,'view_post']);
Route::get ('/delete_post', [PostController::class,'delete_post']);