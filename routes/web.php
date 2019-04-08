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

Route::get('create', function () {
    return view('create');
});



Route::get('/','HomeController@index')->name('post.index');
Route::get('/master','HomeController@listitem');
Route::post('/register','HomeController@register')->name('post.register');
Route::get('/login','HomeController@login');
Route::get('/search','HomeController@cari')->name('post.cari');
Route::get('/insert','HomeController@insert')->name('post.insert');
Route::post('/store','HomeController@store')->name('post.store');
// Route::get('edit/coba/{id_item}','HomeController@edit');
//Route::post('update/{id_item}','HomeController@update');
Route::resource('admin','HomeController');

