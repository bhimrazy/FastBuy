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
    return view('client.index');
})->name('home');

Route::get('/blog', function () {
    return view('client.blog');
})->name('blog');

Route::get('/blog-details', function () {
    return view('client.blog-details');
})->name('blog-details');

Route::get('/shop', function () {
    return view('client.shop-left-sidebar');
})->name('shop-left-sidebar');

Route::get('/my-account', function () {
    return view('client.my-account');
})->name('my-account');

Route::get('/checkout', function () {
    return view('client.checkout');
})->name('checkout');

Route::get('/product-details', function () {
    return view('client.product-details');
})->name('product-details');

Route::get('/contact-us', function () {
    return view('client.contact');
})->name('contact');

Route::get('/about-us', function () {
    return view('client.about-us');
})->name('about-us');

Route::get('/cart', function () {
    return view('client.cart');
})->name('cart');

Route::get('/login-register', function () {
    return view('client.login-register');
})->name('login-register');

Route::get('/compare', function () {
    return view('client.compare');
})->name('compare');

Route::get('/404', function () {
    return view('client.404');
});
Route::get('/faq', function () {
    return view('client.faq');
})->name('faq');
Route::get('/wishlist', function () {
    return view('client.wishlist');
})->name('wishlist');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
