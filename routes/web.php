<?php


Route::get('/', 'BaseController@getIndex'); 
    

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('{url}', 'staticController@getIndex'); //всегда последний
