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
    return view('welcome')->name('home');
});
Route::get('/shop', function () {
    return view('client.shop')->name('shop');
});
Route::get('/my-account', function () {
    return view('client.my-account')->name('my-account');
});
Route::get('/checkout', function () {
    return view('client.checkout')->name('checkout');
});
Route::get('/product-details', function () {
    return view('client.product-details')->name('product-details');
});
Route::get('/contact', function () {
    return view('client.contact')->name('contact');
});
Route::get('/about-us', function () {
    return view('client.about-us')->name('about-us');
});
