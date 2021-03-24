<?php

use Illuminate\Support\Facades\Route;

Route::get('/shops', 'App\Http\Controllers\ShopController@index')->name('shop.list');
Route::get('/shop/{id}', 'App\Http\Controllers\ShopController@show')->name('shop.detail')->where(['id' => '[0-9]+']);
Route::get('/shop/new', 'App\Http\Controllers\ShopController@create')->name('shop.new');
Route::post('/shop', 'App\Http\Controllers\ShopController@store')->name('shop.store');
Route::get('/shop/edit/{id}', 'App\Http\Controllers\ShopController@edit')->name('shop.edit');
Route::post('/shop/update/{id}', 'App\Http\Controllers\ShopController@update')->name('shop.update');
Route::delete('/shop/{id}', 'App\Http\Controllers\ShopController@destroy')->name('shop.destroy');

Route::get('/', function () {
    return redirect('/shops');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
