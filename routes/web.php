<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\ArticleController::class, 'index'])->name('index');
Route::get('/article/{article}', [\App\Http\Controllers\ArticleController::class, 'show'])->name('show');
Route::get('/new', [\App\Http\Controllers\ArticleController::class, 'create'])->name('create');
Route::post('/new', [\App\Http\Controllers\ArticleController::class, 'store'])->name('store');

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Кэш очищен.";
});
