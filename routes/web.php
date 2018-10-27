<?php


Route::get('/', 'BaseController@getIndex'); 
    

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@postIndex');
Route::get('feedback', 'FeedbackController@getIndex');
Route::get('catalog/{id}','CatalogController@getIndex');
Route::get('categories','ProductController@getAll');
Route::group(['middleware'=>['authuser']], function (){
	Route::get('basket', 'BasketController@getIndex');
});
Route::get('{url}', 'staticController@getIndex'); //всегда последний
