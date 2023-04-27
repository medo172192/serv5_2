<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function (){
    Route::post('/create/new/product', [App\Http\Controllers\ProductController::class, 'create']);
    Route::get('/show/products', [App\Http\Controllers\ProductController::class, 'show']);
    Route::post('/show/products', [App\Http\Controllers\ProductController::class, 'showProducts']);
    Route::get('/show/all/product', [App\Http\Controllers\ProController::class, 'showAll']);
    Route::get('/get/all/product', [App\Http\Controllers\ProController::class, 'getAll'])->name("getting");
    Route::get('/get/categories', [App\Http\Controllers\ProController::class, 'getCategories']);
    Route::post('/global/search', [App\Http\Controllers\ProController::class, 'search']);
});

