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
Route::get('/erstellen2', 'HomeController@erstellen2')->name('erstellen2');

Route::get('/profil', 'HomeController@profil')->name('profil');

Route::get('/Kontakt', 'HomeController@Kontakt')->name('Kontakt');

Route::get('/Einstellungen', 'HomeController@Einstellungen')->name('Einstellungen');


Route::get('/profile', 'UserController@profile')->name('profile');

Route::post('hochladen', 'UploadController@hochladen')->name('hochladen');

Route::get("create", 'profiling@index');
Route::post("store", 'profiling@store');
Route::get('/insert', function (){
    return view('InsertForm');
});
Route::post('insert','Controller@insert');

Route::get('/datenschutz', 'HomeController@datenschutz')->name('datenschutz');


Route::get('/suchen', function (){
    $Vsuchen = \App\Veranstaltungen::where('Ort', 'LIKE', '%'.'heim'.'%')->get();

    return View::make('Vsuchen')->with('Vsuchen', $Vsuchen);
})->name('suchen');


Route::get('/suchen', 'RessourceController@suchen')->name('suchen');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/Veranstaltungen/{name}', 'RessourceController@Veranstaltung')->name('Veranstaltung');
Route::get('/test', 'HomeController@test')->name('Veranstaltung');