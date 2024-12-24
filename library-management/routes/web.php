<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\ReaderController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::resource('books', BookController::class);
Route::resource('readers', ReaderController::class);
Route::resource('borrows', BorrowController::class);


Route::get('/borrows/history/{readerId}', [BorrowController::class, 'showHistory'])->name('borrows.history');
