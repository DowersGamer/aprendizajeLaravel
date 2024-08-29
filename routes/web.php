<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\postController;

Route::get('/', homeController::class);
Route::get('post/create', [postController::class, 'vistaCreate']);
Route::get('post/{id}', [postController::class, 'vistaCreate']);
