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
    return view('homepage');
})->name('homepage');

Auth::routes();
Route::get('/hero','HeroController@index');
Route::post('/hero','HeroController@store');

Route::get('/hero/{hero_slug}','HeroController@show')->name('show hero');

// Route::get('/home', 'HomeController@index')->name('home');
