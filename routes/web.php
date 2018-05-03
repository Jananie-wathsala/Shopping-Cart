<?php

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

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index',
]);

Route::get('/addToCart{id}',[
    'uses'=>'ProductController@getAddToCart',
    'as'=>'product.addToCart',
]);

Route::get('/reduceByOne{id}',[
    'uses'=>'ProductController@getReduceByOne',
    'as'=>'product.reduceByOne',
]);

Route::get('/removeItem{id}',[
    'uses'=>'ProductController@getRemoveItem',
    'as'=>'product.removeItem',
]);
Route::get('/shoppingCart',[
    'uses'=>'ProductController@getCart',
    'as'=>'product.shoppingCart',
    
]);

Route::get('/checkout',[
    'uses'=>'ProductController@getCheckout',
    'as'=>'checkout',
    'middleware'=>'auth'
]);

Route::post('/checkout',[
    'uses'=>'ProductController@postCheckout',
    'as'=>'checkout'
]);

Route::group(['prefix' => 'user'], function() {
    Route::group(['middleware' => 'guest'], function() {
        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup',
        ]);
        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup',
        ]);
        Route::get('/login', [
            'uses' => 'UserController@getLogin',
            'as' => 'user.login',
        ]);

        Route::post('/login', [
            'uses' => 'UserController@postLogin',
            'as' => 'user.login',
        ]);
    });
    Route::group(['middleware' => 'auth'], function() {
        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile',
        ]);

        Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout',
        ]);
    });
});
