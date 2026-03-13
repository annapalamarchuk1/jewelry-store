<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\JewelryItemController;

// Основний сайт
Route::get('/', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/items', [JewelryItemController::class, 'index']);
Route::get('/items/{id}', [JewelryItemController::class, 'show']);

// Адмінка (CRUD)
Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('items', ItemController::class);
});