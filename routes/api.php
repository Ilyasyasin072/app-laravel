<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function(){
    // api customer json
    Route::group(['prefix' => 'customer'], function(){
        Route::post('/index-data', 'CustomerController@index_data')->name('customer-api');
    });
    // api product json
    Route::group(['prefix' => 'product'], function(){
        Route::post('/index-data', 'ProductController@index_data')->name('product-api');
    });
    // api category json
    Route::group(['prefix' => 'category'], function(){
        Route::get('/index-data', 'CategoryController@index_data')->name('category-api');
    });
    // api order json
    Route::group(['prefix' => 'order'], function(){
        Route::post('/index-data', 'OrdrController@index_data')->name('order-api');
    });
    // api order detail json
    Route::group(['prefix' => 'orderdetail'], function(){
        Route::post('/index-data', 'OrderDetailController@index_data')->name('orderdetail-api');
    });
});
