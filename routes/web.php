<?php

use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;

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

// Cart Routes
Route::get('/panier', 'App\\Http\\Controllers\\CartController@index')->name('cart.index');
Route::post('/panier/ajouter', 'App\\Http\\Controllers\\CartController@store')->name('cart.store');
Route::delete('/panier/{rowId}', 'App\\Http\\Controllers\\CartController@destroy')->name('cart.destroy');

Route::get('/videpanier', function() {
	Cart::destroy();
});

// Checkout routes
Route::get('/paiement', 'App\\Http\\Controllers\\CheckoutController@index')->name('checkout.index');
Route::post('/paiement', 'App\\Http\\Controllers\\CheckoutController@store')->name('checkout.store');
Route::get('/merci', 'App\\Http\\Controllers\\CheckoutController@thankyou')->name('checkout.thankyou');