<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['auth', 'verified'],function () {
    Route::get('/dashboard',[\App\Http\Controllers\MainController::class, 'dashboard'])->name('dashboard');
    Route::get('/news-add', [\App\Http\Controllers\MainController::class, 'news'])->name('news');
    Route::post('/news-store', [\App\Http\Controllers\MainController::class, 'news_add'])->name('news_add');
    Route::get('/news', [\App\Http\Controllers\MainController::class, 'news_index'])->name('news_index');
    Route::get('/news-update/{id}', [\App\Http\Controllers\MainController::class, 'news_update'])->name('news_update');
    Route::post('/news-updatepost/{id}', [\App\Http\Controllers\MainController::class, 'news_updatepost'])->name('news_updatepost');



    Route::get('/authors', [\App\Http\Controllers\MainController::class, 'authors_index'])->name('authors_index');
    Route::get('/authors-add', [\App\Http\Controllers\MainController::class, 'authors_add'])->name('authors_add');
    Route::post('/authors-store', [\App\Http\Controllers\MainController::class, 'authors_store'])->name('authors_store');
    Route::get('/authors-update/{id}', [\App\Http\Controllers\MainController::class, 'authors_update'])->name('authors_update');
    Route::post('/authors-updatepost/{id}', [\App\Http\Controllers\MainController::class, 'authors_updatepost'])->name('authors_updatepost');



    Route::get('/categories', [\App\Http\Controllers\MainController::class, 'categories_index'])->name('categories_index');
    Route::get('/categories-add', [\App\Http\Controllers\MainController::class, 'categories_add'])->name('categories_add');
    Route::post('/categories-store', [\App\Http\Controllers\MainController::class, 'categories_store'])->name('categories_store');
    Route::get('/categories-update/{id}', [\App\Http\Controllers\MainController::class, 'categories_update'])->name('categories_update');
    Route::post('/categories-updatepost/{id}', [\App\Http\Controllers\MainController::class, 'categories_updatepost'])->name('categories_updatepost');


    Route::get('/news-delete{id}', [\App\Http\Controllers\MainController::class, 'news_delete'])->name('news_delete');
    Route::get('/authors-delete{id}', [\App\Http\Controllers\MainController::class, 'authors_delete'])->name('authors_delete');
    Route::get('/category-delete{id}', [\App\Http\Controllers\MainController::class, 'categories_delete'])->name('categories_delete');


});


