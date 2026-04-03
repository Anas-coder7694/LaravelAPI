<?php

use App\Http\Controllers\API\AuthorController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\UserController;
use App\Models\Article;
use App\Models\Category;
use App\Models\Product;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\API\ArticleController;
use App\Http\Controllers\API\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Models\User;



Route::get('/users',[UserController::class,'index']);

Route::get('/products', [ProductController::class,'show']);

Route::get('/authors',[AuthorController::class,'index']);

Route::get('/articles', [ArticleController::class, 'index']);





Route::post('/articles',[ArticleController::class,'store']);

Route::post('/products',[ProductController::class,'store']);
 
Route::post('/user',[UserController::class,'store']);

Route::post('/author',[AuthorController::class,'store']);

Route::post('/category',[CategoryController::class,'store']);



Route::delete('delete_product/{id}',[ProductController::class,'destroy']);

Route::delete('delete_article/{id}', [ArticleController::class,'destroy']); 

Route::delete('delete_author/{id}',[UserController::class,'destroy']); 

Route::delete('delete_user/{id}',[UserController::class,'destroy']);
 
Route::delete('delete_category/{id}',[CategoryController::class,'destroy']);






