<?php

Route::get('/', function () {
    return view('welcome');
});

Route::post('/payments/pay', 'PaymentController@pay')->name('pay');
Route::get('/payments/approval', 'PaymentController@approval')->name('approval');
Route::get('/payments/cancelled', 'PaymentController@cancelled')->name('cancelled');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
