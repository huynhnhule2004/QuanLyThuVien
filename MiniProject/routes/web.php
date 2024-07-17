<?php

use App\Http\Controllers\Admin\AuthorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/', [CategoryController::class, 'index']);
Route::get('/authors', [AuthorController::class, 'index']);

