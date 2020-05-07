<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
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
/*
Route::get('/', function () {
    return view('index');
});*/

/*
Route::get('/games', function () {
    return view('games');
});*/

Auth::routes();

Route::get('/','IndexController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/{product}', 'HomeController@download')->name('home.download');
Route::get('/home-search','HomeController@search')->name('home.search');
Route::get('/profile', 'UserController@profile');

Route::post('/profile', 'UserController@update_avatar');

Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/products/{product}', 'ProductsController@show')->name('products.show');
Route::get('/search','ProductsController@search')->name('search');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart','CartController@store')->name('cart.store');
Route::post('/cart/switchToSaveForLater/{product}','CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');
Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');

Route::post('/cart/SaveForLater/{product}','SaveForLaterController@switchToCart')->name('SaveForLater.switchToCart');
Route::delete('/SaveForLater/switchToSaveForLater/{product}','SaveForLaterController@destroy')->name('SaveForLater.destroy');
Route::get('empty',function(){
        Cart::instance('SaveForLater')->destroy();
});

Route::get('/checkout','CheckoutController@index')->name('checkout.index');
Route::post('/checkout','CheckoutController@store')->name('checkout.store');
Route::get('/thankyou','ConfirmationController@index')->name('confirmation.index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

