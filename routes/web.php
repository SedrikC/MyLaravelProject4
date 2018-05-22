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

Route::get('/erstellen', 'HomeController@erstellen')->name('erstellen');

Route::get('/profil', 'HomeController@profil')->name('profil');


Route::get('/profile', 'UserController@profile')->name('profile');
Route::post('hochladen', 'UploadController@hochladen')->name('hochladen');

Route::get('/suchen', function (){
    $Vsuchen = \App\Veranstaltungen::all();

    return View::make('Vsuchen')->with('Vsuchen', $Vsuchen);
})->name('suchen');


Route::get('/Veranstaltungen/{name}', function ($name){
   $VerNamen = \App\Veranstaltungen::where('Name', $name);

   return View::make('Vprofil')->with('Vprofil', $VerNamen);
})->name('VProfil');

Route::get('/bla', function(){
    return ("Hallo");
});
