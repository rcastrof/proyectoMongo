<?php

use Illuminate\Support\Facades\Auth;
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

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::resource('categorias',App\Http\Controllers\CategoriaController::class)->names('categorias');
});

Route::group(['middleware'=>'auth'], function(){
    Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/search',[App\Http\Controllers\HomeController::class, 'search'])->name('search');
    Route::get('/selectCategoria',[App\Http\Controllers\HomeController::class, 'selectCategoria'])->name('selectCategoria');


    Route::resource('posts',App\Http\Controllers\PostController::class);
});

