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

Route::group(['namespace' => 'Before', 'prefix' => 'before'], function () {
    Route::get('/', 'OfferController@index');
    Route::get('/{id}', 'OfferController@detail');
});

Route::group(['namespace' => 'After', 'prefix' => 'after'], function () {
    Route::get('/', 'OfferController@index');
    Route::get('/{id}', 'OfferController@detail');
});
