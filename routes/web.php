<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/cats',   [CategoryController::class, 'list'])->name('categories.list');
Route::get('/create', [CategoryController::class, 'create']);
Route::post('/save', [CategoryController::class, 'save'])->name('categories.save');
Route::DELETE('/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
Route::get('/update/{id}', [CategoryController::class, 'update']);
Route::get('/edite', [CategoryController::class, 'edite'])->name('categories.edite');
/////////////////////////////articles/////////////////////////
Route::get('/article/{id}',[ArticleController::class, 'list']);
Route::get('/details/{id}',[ArticleController::class, 'showDetails']);
Route::get('/updateArticle/{id}', [ArticleController::class, 'update']);
Route::get('/editeArticle', [ArticleController::class, 'edite'])->name('articls.edite');
Route::DELETE('/deleteArticle/{id}', [ArticleController::class, 'delete'])->name('article.delete');
Route::get('/createArticle', [ArticleController::class, 'create']);
Route::post('/saveArticle', [ArticleController::class, 'save'])->name('article.save');