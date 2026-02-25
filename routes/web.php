<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\JewelryItemController;

Route::get('/', [MainController::class, 'index']);

Route::get('/items', [JewelryItemController::class, 'index']);

Route::get('/items/{id}', [JewelryItemController::class, 'show']);

Route::get('/about', [MainController::class, 'about']);