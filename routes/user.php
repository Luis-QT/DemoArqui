<?php

Route::get('index', function(){
  return view('user.home');
});
 
Route::get('theses','ThesisController@index');
Route::post('theses/search','ThesisController@search');
Route::get('theses/{id}/information','ThesisController@information');
Route::post('theses/{id}/order','ThesisController@order');

Route::get('books','BookController@index');
Route::post('books/search','BookController@search');
Route::get('books/{id}/information','BookController@information');
Route::post('books/{id}/order','BookController@order');

Route::get('configurations','ConfigurationController@index');
Route::post('configurations/updatePassword','ConfigurationController@updatePassword');
Route::post('configurations/highlightSearch','ConfigurationController@highlightSearch');
