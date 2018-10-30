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
    return view('welcome');
});

Route::resource('api/films/','FilmController');

Route::get('api/films/{slug}', 'FilmController@show')->name('film');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/films/create', 'FilmController@create')->name('create');

Route::post('/films/create', 'FilmController@store')->name('store');	

Route::get('/films/genre', 'GenreController@index')->name('genre');

Route::post('/films/genre', 'GenreController@store')->name('storeGenre');



