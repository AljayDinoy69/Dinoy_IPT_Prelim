<?php

use App\Http\Controllers\ItemController;

Route::get('/', [ItemController::class, 'home'])->name('home');
Route::get('/items', [ItemController::class, 'items'])->name('items'); 
Route::get('/pictures', [ItemController::class, 'pictures'])->name('pictures');
Route::resource('items',ItemController::class);