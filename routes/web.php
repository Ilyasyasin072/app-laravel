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
    return view('layouts.index');
});

Route::group(['prefix'=> 'web'], function(){
    // web customer views;
    Route::group(['prefix' => 'customer'], function(){
        Route::get('/', 'CustomerController@index')->name('customer-web-index');
        Route::get('/create', 'CustomerController@create')->name('customer-web-create');
        Route::get('/edit/{id}', 'CustomerController@edit')->name('customer-web-edit');
        Route::get('/update/{id}', 'CustomerController@update')->name('customer-web-update');
        Route::get('/show{id}', 'CustomerController@show')->name('customer-web-show');
        Route::get('/delete{id}', 'CustomerController@delete')->name('customer-web-delete');
    });
    // web category views;
    Route::group(['prefix' => 'category'], function(){
        Route::get('/', 'CategoryController@index')->name('category-web-index');
        Route::get('/create', 'CategoryController@create')->name('category-web-create');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('category-web-edit');
        Route::get('/update/{id}', 'CategoryController@update')->name('category-web-update');
        Route::get('/show/{id}', 'CategoryController@show')->name('category-web-show');
        Route::get('/delete/{id}', 'CategoryController@delete')->name('category-delete');
    });
    // web product views;
    Route::group(['prefix' => 'product'], function(){
        Route::get('/', 'ProductController@index')->name('product-web-index');
        Route::get('/create', 'ProductController@create')->name('product-web-create');
        Route::get('/edit/{id}', 'ProductController@edit')->name('product-web-edit');
        Route::get('/update/{id}', 'ProductController@update')->name('product-web-update');
        Route::get('/show/{id}', 'ProductController@show')->name('product-web-show');
        Route::get('/delete/{id}', 'CustomerController@delete')->name('customer-web-delete');
    });
    // web order views;
    Route::group(['prefix' => 'order'], function(){
        Route::get('/', 'OrderController@index')->name('order-web-index');
        Route::get('/create', 'OrderController@create')->name('order-web-create');
        Route::get('/edit/{id}', 'OrderController@edit')->name('order-web-edit');
        Route::get('/update/{id}', 'OrderController@update')->name('order-web-update');
        Route::get('/show{id}', 'OrderController@show')->name('order-web-show');
        Route::get('/delete{id}', 'CustomerController@delete')->name('customer-web-delete');
    });
    // web order detail views;
    Route::group(['prefix' => 'orderdetail'], function(){
        Route::get('/', 'OrderDetailController@index')->name('orderdetail-web-index');
        Route::get('/create', 'OrderDetailController@create')->name('orderdetail-web-create');
        Route::get('/edit/{id}', 'OrderDetailController@edit')->name('orderdetail-web-edit');
        Route::get('/update/{id}', 'OrderDetailController@update')->name('orderdetail-web-update');
        Route::get('/show{id}', 'OrderDetailController@show')->name('orderdetail-web-show');
        Route::get('/delete{id}', 'CustomerController@delete')->name('customer-web-delete');
    });
});
