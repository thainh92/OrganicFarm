<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Assignment\HomeController;

Route::get('/home', [HomeController::class, 'showHomePage'])->name('home-page');

Route::get('/home/news', [HomeController::class, 'showNews'])->name('news');

/*
Route::prefix('home')->group(function () {
    Route::get('/news', [HomeController::class, 'showNews'])->name('news');
});
*/