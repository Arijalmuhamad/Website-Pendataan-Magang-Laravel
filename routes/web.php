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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('home');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/dashboard', 'DashboardController@index');
	Route::get('/magang', 'MagangController@index');
	Route::post('/magang/create', 'MagangController@create');
	Route::get('/magang/{id}/edit', 'MagangController@edit');
	Route::post('/magang/{id}/update', 'MagangController@update');
	Route::get('/magang/{id}/delete', 'MagangController@delete');
	Route::get('/magang/{id}/profile', 'MagangController@profile');

	Route::get('/pembimbing', 'PembimbingController@index');
	Route::post('/pembimbing/create', 'PembimbingController@create');
	Route::get('/pembimbing/{id}/edit', 'PembimbingController@edit');
	Route::post('/pembimbing/{id}/update', 'PembimbingController@update');
	Route::get('/pembimbing/{id}/delete', 'PembimbingController@delete');
	Route::get('/pembimbing/{id}/profile', 'PembimbingController@profile');
});
