<?php
use Illuminate\Support\Facades\Redirect;

Route::get('/', 'HomePageController@index')->name('homepage');

Route::get('/category/{slug_categoryname}', 'CategoryController@index')->name('category');

Route::get('/product/{slug_productname}', 'ProductController@index')->name('product');

Route::post('/search', 'ProductController@search')->name('product_search');
Route::get('/search', 'ProductController@search')->name('product_search');

Route::get('/shoppingcart', 'ShoppingCartController@index')->name('shoppingcart');

//Route::get('/shoppingcart', 'ShoppingCartController@index')->name('shoppingcart')->middleware('auth');
//tek bir route için auth middleware kullanımı

Route::group(['middleware'=>'auth'],function(){
    Route::get('/pay', 'PayController@index')->name('pay');
    Route::get('/sellers', 'SellersController@index')->name('sellers');
    Route::get('/seller/{id}', 'SellersController@detail')->name('seller');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/login', 'UserController@loginform')->name('user.login');
    Route::post('/login', 'UserController@login')->name('user.login');
    Route::get('/register', 'UserController@registerform')->name('user.register');
    Route::post('/register', 'UserController@register');
    Route::post('/logout', 'UserController@logout')->name('user.logout');
    Route::get('/activation/{key}', 'UserController@activation')->name('activation');
});

    //Api

Route::group(['prefix' => 'api'], function () {
    Route::get('/login', 'UserController@api_login')->name('api.login');
    Route::post('/register', 'UserController@api_register')->name('api.register');

});












