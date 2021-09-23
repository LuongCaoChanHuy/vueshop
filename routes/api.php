<?php

// use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AuthorController;

use Illuminate\Support\Facades\Route;

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
Route::post('logout', [UserController::class, 'logout'])->middleware('auth:sanctum');

// Route::group(['prefix' => 'books', 'middleware' => 'auth:sanctum'], function () {
//     Route::get('/', [BookController::class, 'index']);
//     Route::post('add', [BookController::class, 'add']);
//     Route::get('edit/{id}', [BookController::class, 'edit']);
//     Route::post('update/{id}', [BookController::class, 'update']);
//     Route::delete('delete/{id}', [BookController::class, 'delete']);
// });

Route::group(['prefix'=>'/'],function(){
    Route::resource('users',UserController::class);
    Route::resource('products',ProductController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('authors',AuthorController::class);
    Route::resource('orders',OrderController::class);
    // option
    Route::get('customers',[UserController::class,'customers']);

    // search
    Route::get('products-search',[ProductController::class, 'search']);
    Route::get('categories-search',[CategoryController::class, 'search']);
    Route::get('authors-search',[AuthorController::class, 'search']);
    Route::get('orders-search',[OrderController::class, 'search']);
    Route::get('users-search',[CustomersController::class, 'search']);
});