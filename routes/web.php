<?php

Route::get('create', function () {
    return view('List.create');
});


Route::resource('admin','HomeController');
Route::get('/','HomeController@index')->name('post.index');
Route::get('/master','HomeController@listitem');
Route::post('/register','HomeController@register')->name('post.register');
Route::get('/login','HomeController@login');
Route::get('/search','HomeController@cari')->name('post.cari');
Route::get('/insert','HomeController@insert')->name('post.insert');
Route::post('/store','HomeController@store')->name('post.store');
// Route::get('edit/coba/{id_item}','HomeController@edit');
//Route::post('update/{id_item}','HomeController@update');

Route::resource('category','CategoryController');
Route::get('/cari', 'CategoryController@cari')->name('post.search');
Route::get('/createcat','CategoryController@create');
Route::post('/save','CategoryController@save')->name('post.save');
Route::get('/category','CategoryController@index');
