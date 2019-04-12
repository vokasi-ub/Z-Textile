<?php

Route::get('create', function () {
    return view('List.create');
});


Route::resource('admin','IndexController');
Route::get('/master','IndexController@listitem');
Route::post('/register','IndexController@register')->name('post.register');
Route::get('/search','IndexController@cari')->name('post.cari');
Route::get('/insert','IndexController@insert')->name('post.insert');
Route::post('/store','IndexController@store')->name('post.store');
// Route::get('edit/coba/{id_item}','IndexController@edit');
//Route::post('update/{id_item}','IndexController@update');

Route::resource('category','CategoryController');
Route::get('/cari', 'CategoryController@cari')->name('post.search');
Route::get('/createcat','CategoryController@create');
Route::post('/save','CategoryController@save')->name('post.save');
Route::get('/category','CategoryController@index');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');

