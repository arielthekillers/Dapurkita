<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
// Route::get('/', function () {
//     return view('app');
// });
Route::get('/', [FrontPageController::class, 'index'])->name('frontpage');
Route::get('/news/{slug}', [ArticleController::class, 'show'])->name('news.show');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category');
