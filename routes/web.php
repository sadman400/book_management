<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// books
Route::redirect('/', 'books');
Route::resource('/books', BookController::class);

// authors
Route::resource('/authors', AuthorController::class);


