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

Route::middleware('guest')
    ->prefix('admin')
    ->name('admin.')
    ->namespace('App\Http\Controllers')
    ->group(function (){
        Route::get('/', function () {return view('admin.layouts.dashboard');})->name('dashboard');
        Route::resource('products', 'ProductController');
        Route::resource('blogs', 'BlogController');
        Route::resource('categories', 'CategoryController');
        Route::resource('users', 'UserController')->except(['show']);
});