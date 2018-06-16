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
Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/erstellen', 'HomeController@erstellen')->name('erstellen');
Route::get('/erstellen2', 'HomeController@erstellen2')->name('erstellen2');

Route::get('/profil', 'HomeController@profil')->name('profil');

Route::get('/Kontakt', 'HomeController@Kontakt')->name('Kontakt');

Route::get('/Einstellungen', 'HomeController@Einstellungen')->name('Einstellungen');


Route::get('/profile', 'UserController@index')->name('profile');
Route::post('profile', 'UserController@update_avatar');


Route::get("create", 'profiling@index');
Route::post("store", 'profiling@store');
Route::get('/insert', function (){
    return view('InsertForm');
});
Route::post('insert','Controller@insert');

Route::get('insert_veranstaltungen1','Controller@insert_veranstaltungen1');
Route::get('insert_veranstaltungen2','Controller@insert_veranstaltungen2');


Route::get('/datenschutz', 'HomeController@datenschutz')->name('datenschutz');

Route::get('/select_mein_profil','Controller@select_mein_profil');

Route::get('/suchen', 'RessourceController@suchen')->name('suchen');

Route::get('/meine_veranstaltungen', 'RessourceController@my_veranstaltungen')->name('my_veranstaltungen');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/delete_Veranstaltung', 'RessourceController@delete_Veranstaltung')->name('delete_Veranstaltung');

Route::get('/admin_veranstaltungen_loeschen', 'RessourceController@admin_veranstaltungen_loeschen')->name('admin_veranstaltungen_loeschen');
Route::get('/admin_user_loeschen', 'RessourceController@admin_user_loeschen')->name('admin_user_loeschen');


Route::get('/admin', 'RessourceController@admin')->name('Admin');
Route::get('/admin_user', 'RessourceController@admin_user')->name('Admin_user');


Route::get('/Veranstaltung/{id}', 'RessourceController@Veranstaltung')->name('Veranstaltung');
Route::get('/StoreComment', 'CommentController@store')->name('StoreComment');

Route::get('/CreatePoll/{id}', 'HomeController@CreatePoll')->name('Pollerstellen');

Route::post('/StorePoll', 'PollController@store');

Route::get('/Teilnahme', 'TeilnahmeController@store');
Route::get('/Like', 'LikeController@store');


Route::get('Profil/{id}', 'UserController@profil')->name('UserProfil');
