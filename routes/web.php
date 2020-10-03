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

Auth::routes(['verify'=>true]);
Route::get('/', [
    'uses' => 'HomePageController@index',
    'as' => 'home'
]);
Route::post('/subscribeToNewsLetter', [
    'uses' => 'HomePageController@subscribeToNewsLetter',
    'as' => 'home.subscribe'
]);
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('/sqs', function () {
    \App\Jobs\ProcessPodcast::dispatch();
});
Route::get('/email', function () {
    \App\User::first()->notify(new \App\Notifications\NewUserRegistered());
});

Route::get('/blog', function () {
    return view('client.blog');
})->name('blog');

Route::get('/blog-details', function () {
    return view('client.blog-details');
})->name('blog-details');
Route::get('/contact-us', function () {
    return view('client.contact');
})->name('contact');

Route::get('/about-us', function () {
    return view('client.about-us');
})->name('about-us');
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
Route::get('/product-details', function () {
    return view('client.product-details');
})->name('product-details');
Route::post('/products/search',[
    'uses'=>'ProductController@search',
    'as'=>'products.search'
]);
Route::resource('shop', 'ShopController');
Route::resource('carts', 'CartController')->only([
    'index','store',
]);
Route::get('/carts/reduceByOne/',[
    'uses'=>'CartController@reduceByOne',
    'as'=>'carts.reduceByOne'
]);
Route::get('/carts/increaseByOne/',[
    'uses'=>'CartController@increaseByOne',
    'as'=>'carts.increaseByOne'
]);
Route::get('/carts/delete/{id}',[
    'uses'=>'CartController@delete',
    'as'=>'carts.delete'
]);
Route::get('/checkout', [
    'uses' => 'CheckoutController@getCheckout',
    'as'=>'checkout'
]);
Route::post('/checkout', [
    'uses' => 'CheckoutController@postCheckout',
    'as'=>'checkout.process'
]);
//Route::get('/admin-login', function () {
//    return view('admin.admin-login');
//})->name('admin-login')->middleware('guest');
//Route::post('/admin-login',[
//    'uses' => 'AdminController@authenticate',
//    'as' => 'admin.authenticate'
//]);
Route::get('/my-account', [
    'uses' => 'CustomerController@getProfile',
    'as'=>'my-account'
]);
Route::put('/my-account/update/{user}', [
    'uses' => 'CustomerController@updateProfile',
    'as'=>'my-account.profile.update'
]);

Route::get('/checkout/payment/esewa', [
    'name' => 'eSewa Checkout Payment',
    'as' => 'checkout.payment.esewa',
    'uses' => 'EsewaController@checkout',
]);

Route::post('/checkout/payment/{order}/esewa/process', [
    'name' => 'eSewa Checkout Payment',
    'as' => 'checkout.payment.esewa.process',
    'uses' => 'EsewaController@payment',
]);

Route::get('/checkout/payment/{order}/esewa/completed', [
    'name' => 'eSewa Payment Completed',
    'as' => 'checkout.payment.esewa.completed',
    'uses' => 'EsewaController@completed',
]);

Route::get('/checkout/payment/{order}/failed', [
    'name' => 'eSewa Payment Failed',
    'as' => 'checkout.payment.esewa.failed',
    'uses' => 'EsewaController@failed',
]);

//Admin AuthRoutes
Route::group(['prefix'=>'admin','as' => 'admin.','namespace' => 'Admin\Auth'],function (){
    // Login routes
    Route::get('/login', 'AdminLoginController@login')->name('login');
    Route::post('/login', 'AdminLoginController@authenticate')->name('login.submit');

    // Logout route
    Route::post('/logout', 'AdminLoginController@logout')->name('logout');
    // Password reset routes
    Route::get('/password/reset', 'AdminForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/email', 'AdminForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('/password/reset/{token}', 'AdminResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/password/reset', 'AdminResetPasswordController@reset')->name('password.update');
    // Password confirmation process
    Route::get('/password/confirm', 'AdminConfirmPasswordController@showConfirmForm')->name('password.confirm');
    Route::post('/password/confirm', 'AdminConfirmPasswordController@confirm')->name('password.confirm');

});
Route::group(['prefix'=>'admin','middleware'=>'auth:admin'],function(){
    Route::get('/dashboard',[
        'uses' => 'AdminController@index',
        'as' => 'admin.dashboard'
    ]);


    Route::group(['as' => 'admin.'],function (){
        // Permissions
        Route::delete('permissions/destroy', 'PermissionController@massDestroy')->name('permissions.massDestroy');
        Route::resource('permissions', 'PermissionController');

        // Roles
        Route::delete('roles/destroy', 'RoleController@massDestroy')->name('roles.massDestroy');
        Route::resource('roles', 'RoleController');

        // Users
        Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
        Route::resource('users', 'UsersController');

        // Vendors
        Route::delete('vendors/destroy', 'VendorController@massDestroy')->name('vendors.massDestroy');
        Route::resource('vendors', 'VendorController');

        //Category
        Route::resource('categories', 'CategoryController');
        Route::get('/categories/status/update', 'CategoryController@updateStatus')->name('categories.update.status');

        //SubCategory
        Route::resource('subcategories', 'SubCategoryController');

        //Tag
        Route::resource('tags', 'TagController');
        Route::get('/tags/status/update', 'TagController@updateStatus')->name('tags.update.status');

        //Product
        Route::resource('products', 'ProductController');

        //Orders
        Route::resource('orders', 'OrderController');

        //Customers
        Route::get('/customers',[
            'uses' => 'AdminController@customers',
            'as' => 'customers'
        ]);
        Route::get('/customers/{customer}',[
            'uses' => 'AdminController@showCustomers',
            'as' => 'customers.show'
        ]);

        //Transactions
        Route::resource('transactions', 'TransactionController');

        //Brands
        Route::resource('brands', 'BrandController');
        Route::get('/brands/status/update', 'BrandController@updateStatus')->name('brands.update.status');

        //Setting
        Route::get('/settings',[
            'uses' => 'SettingController@index',
            'as' => 'settings.index'
        ]);
        Route::post('/settings', [
            'uses' => 'SettingController@update',
            'as' => 'settings.update'
        ]);


    });




});
Route::get('/{product}',[
    'uses' => 'ProductController@productShow',
    'as' => 'product.productShow'
]);
//FonePay
Route::any('fonepay/return', 'FonepayController@fonepay_response')->name('fonepay.return')->middleware('auth');
//Esewa
Route::any('esewa/success', 'EsewaController@success')->name('esewa.success')->middleware('auth');
Route::any('esewa/fail', 'EsewaController@fail')->name('esewa.fail')->middleware('auth');
Route::get('payment/response', 'EsewaController@payment_response')->name('payment.response')->middleware('auth');
