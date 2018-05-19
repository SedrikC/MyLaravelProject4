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
    return view('EasyPlanHome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/suchen', 'HomeController@suchen')->name('suchen');

Route::get('/erstellen', 'HomeController@erstellen')->name('erstellen');

Route::get('/profil', 'HomeController@profil')->name('profil');

Route::post('upload', 'UploadController@upload');