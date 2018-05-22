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

Route::get('/', function () {
    return view('EasyPlanHome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/erstellen', 'HomeController@erstellen')->name('erstellen');

Route::get('/profil', 'HomeController@profil')->name('profil');


Route::get('/profile', 'UserController@profile')->name('profile');
Route::post('hochladen', 'UploadController@hochladen')->name('hochladen');
Route::post('profile', 'UserController@update_avatar');

Route::get('/suchen', function (){
    $Vsuchen = \App\Veranstaltungen::all();

    return View::make('Vsuchen')->with('Vsuchen', $Vsuchen);
})->name('suchen');


Route::get('/Veranstaltungen/{Name}', function ($name){
   $VerNamen = \App\Veranstaltungen::where('name', $name)->firstOrFail();

   return View::make('Vprofil')->with('name', $VerNamen);
})->name('VProfil');

