<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\BooksController;

use App\Http\Controllers\TesController;
use App\Http\Controllers\PublisherController;
use App\Models\Categories;
use App\Models\Publisher;


Route::get('/publishers', [PublisherController::class, 'index']);
Route::get('/',[BooksController::class,'index']);
Route::get('/detail/{id}',[BooksController::class,'detail']);
Route::view('/contact', 'contact');
Route::get('/detailpublishers/{id}',[PublisherController::class,'detail']);
Route::get('/category/{id}', [CategoriesController::class, 'detail']);




