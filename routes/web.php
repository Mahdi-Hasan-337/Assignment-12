<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [MainController::class, 'dashbaord']);
// Route::get('/', [MainController::class, 'fetch']);

Route::get('/', [MainController::class, 'index']);

/// Making trip and stroing it into trip table
Route::get('/add-trip', [MainController::class, 'create'])->name('add-trip');
Route::post('/store-trip', [MainController::class, 'store'])->name('store-trip');

/// Choosing seat and seat quantity and booked this
Route::get('/choose-seat/{id}', [MainController::class, 'booking']);
Route::post('/book-seat/{id}', [MainController::class, 'book']);

Route::get('sold-product/{id}',  [MainController::class, 'sold']);

// Route::post('/store-trip', [MainController::class, 'store'])->name('store-trip');

Route::get('/add-product', [MainController::class, 'create']);
Route::post('/store-product', [MainController::class, 'store']);

Route::get('/sold-items', [MainController::class, 'recentOrders']);

Route::get('/sold', [MainController::class, 'sold_items']);

Route::get('/edit-product/{id}', [MainController::class, 'edit']);
Route::put('/update-product/{id}', [MainController::class, 'update']);

Route::get('/delete-product/{id}', [MainController::class, 'delete']);

Route::get('sold-product/{id}',  [MainController::class, 'sold']);
Route::post('sell-product/{id}',  [MainController::class, 'sell']);


