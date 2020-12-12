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

// Products routes
Route::get('/boutique', 'App\\Http\\Controllers\\ProductController@index')->name('products.index');
Route::get('/boutique/{slug}', 'App\\Http\\Controllers\\ProductController@show')->name('products.show');
