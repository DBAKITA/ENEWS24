<?php

use App\Http\Controllers\MainController;

use Illuminate\Support\Facades\Route;

Route::get ('/', [MainController::class,'index']);
Route::get ('/about', [MainController::class,'about']);
Route::get ('/contact', [MainController::class,'contact']);

Route::get ('/posts', [PostsController::class,'index']);

Route::get ('/create', [PostsController::class,'create']);
Route::get ('/view_post', [PostsController::class,'view_post']);
Route::get ('/delete_post', [PostsController::class,'delete_post']);