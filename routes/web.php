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

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->namespace('App\Http\Controllers\Dashboard')
    ->group(function (){
        Route::get('/', function () {return view('admin.layouts.dashboard');})->name('dashboard');
        Route::resource('products', 'ProductController');
        Route::resource('blogs', 'BlogController');
        Route::resource('categories', 'CategoryController');
        Route::resource('tags', 'TagController')->except(['show']);
        // Route::resource('users', 'UserController')->except(['show']);
        Route::resource('messages', 'MessageController')->only(['index', 'show', 'destroy']);
});

Route::prefix('/')
    ->namespace('App\Http\Controllers\Frontend')
    ->group(function (){
        Route::get('/','HomeController@index')->name('index');
        Route::get('collections', 'ProductController@collections')->name('collections');
        Route::get('products/{slug}', 'ProductController@index');
        Route::get('product/{slug}', 'ProductController@show');
        Route::get('blogs', 'BlogController@index')->name('blogs');
        Route::get('blogs/{slug}', 'BlogController@category');
        Route::get('blog/{slug}', 'BlogController@show');
        Route::get('category', 'BlogController@category');
        Route::get('about', 'HomeController@about')->name('about');
        Route::get('contact', 'HomeController@contact')->name('contact');
        Route::get('faq', 'HomeController@faq')->name('faq');
        Route::get('404', 'HomeController@crash');
        Route::get('search', 'HomeController@search')->name('search');
        Route::post('messages', 'MessageController@store')->name('messages');
});

require __DIR__.'/auth.php';