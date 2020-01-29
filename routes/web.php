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
Route::get('/', function() {return view('layouts.app');});
Route::get('/games', 'PagesController@games');
Route::get('/developpers', 'PagesController@developpers');
Route::get('/users', 'PagesController@users');

Route::get('/game/add', 'GamesController@addGame')->name('game_add_get');
Route::post('/game/add', 'GamesController@postAddGame')->name('game_add_post');
Route::get('/game/{game_id}', 'GamesController@getGame')->name('game_details');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test_visitor', function() {
    if (\Auth::user()->role != \App\User::VISITOR) abort (403);
    return 'Page réservé aux visiteurs.';
})->middleware('auth');

Route::get('/test_pro', function() {
    if (\Auth::user()->role != \App\User::PRO) abort (403);
    return 'Page réservé aux pros.';
})->middleware('auth');

Route::get('/test_admin', function() {return 'Page réservé aux admins';})->middleware('is_admin:3');
