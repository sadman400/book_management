<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// books
Route::redirect('/', 'books');
Route::resource('/books', BookController::class);

// authors
Route::resource('/authors', AuthorController::class);


// categories
Route::resource('/categories', CategoryController::class);


