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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/makanan', 'MakananController@index')->name('makanan');
Route::get('/tambahmakanan', 'MakananController@formmakanan')->name('formmakanan');
Route::post('/simpanmakanan', 'MakananController@simpanmakanan')->name('simpan');
Route::get('/editmakanan/{id}', 'MakananController@formeditmakanan')->name('formeditmakanan');
Route::post('/updatemakanan/{id}', 'MakananController@updatemakanan')->name('update');
Route::delete('/hapusmakanan/{id}', 'MakananController@hapusmakanan')->name('hapus');

