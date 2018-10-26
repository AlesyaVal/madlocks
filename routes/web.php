<?php


Route::get('/', 'BaseController@getIndex'); 
    

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@postIndex');
Route::get('feedback', 'FeedbackController@getIndex');
Route::get('catalog/{id}','CatalogController@getIndex');
Route::get('{url}', 'staticController@getIndex'); //всегда последний
