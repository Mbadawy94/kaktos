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
    ->namespace('App\Http\Controllers\Dashboard')
    ->group(function (){
        Route::get('/', function () {return view('admin.layouts.dashboard');})->name('dashboard');
        Route::resource('products', 'ProductController');
        Route::resource('blogs', 'BlogController')->except(['show']);
        Route::get('blogs/{slug}', 'BlogController@show');
        Route::resource('categories', 'CategoryController');
        Route::resource('tags', 'TagController')->except(['show']);
        Route::resource('users', 'UserController')->except(['show']);
});

Route::middleware('guest')
    ->prefix('/')
    ->namespace('App\Http\Controllers\frontend')
    ->group(function (){
        Route::get('/', function () {return view('frontend.index');})->name('index');
        Route::get('collections', 'ProductController@collections')->name('collections');
        Route::get('products', 'ProductController@index');
        Route::get('product', 'ProductController@show')->name('product');
        Route::get('blogs', 'BlogController@index')->name('blogs');
        Route::get('blog', 'BlogController@show');
        Route::get('category', 'BlogController@category');
        Route::get('about', 'HomeController@about')->name('about');
        Route::get('contact', 'HomeController@contact')->name('contact');
        Route::get('faq', 'HomeController@faq')->name('faq');
        Route::get('404', 'HomeController@crash');
});
