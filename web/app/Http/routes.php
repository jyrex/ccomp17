<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function() {
	return view('landing');
});

Route::auth();

Route::group(['middleware' => 'auth'], function() {

	// TIM
	Route::get('/home', function() {
		return view('tim.home');
	});
	Route::resource('/team', 'Tim\AnggotaController');
	Route::get('/payment', function() {
		return view('tim.pembayaran.form');
	});

	// ADMIN
	Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function() {
		// Landing
		Route::get('/', function() {
			return view('admin.index');
		});
		// CRUD
		// Peserta
		Route::resource('/peserta', 'Admin\PesertaController');
	});
});
