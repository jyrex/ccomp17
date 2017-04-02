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

// Web landing page
Route::get('/', function() {
	return view('landing');
});

// Route untuk detail lomba
Route::get('/cp', function() {
	return view('lomba.cp');
});
Route::get('/datamining', function() {
	return view('lomba.datamining');
});
Route::get('/aplikasi', function() {
	return view('lomba.aplikasi');
});
Route::get('/linefollower', function() {
	return view('lomba.linefollower');
});
Route::get('/uiux', function() {
	return view('lomba.uiux');
});
Route::get('/embedded', function() {
	return view('lomba.embedded');
});

// FAQ
Route::get('/faq', function() {
	return view('faq');
});

// Route login dan register
Route::auth();

// Route user yang sudah login (terautentikasi)
Route::group(['middleware' => 'auth'], function() {

	// TIM
	Route::get('/home', 'HomeController@index');
	Route::resource('/team', 'Tim\AnggotaController');
	Route::resource('/submission', 'Tim\SubmissionController');
	Route::get('/payment', function() {
		return view('tim.pembayaran.form');
	});
	Route::get('/setting', function() {
		return view('tim.pengaturan');
	});

	// ADMIN
	Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function() {
		// CRUD
		Route::resource('/peserta', 'Admin\PesertaController');
		Route::resource('/pengumuman', 'Admin\PengumumanController');
	});
});

// AJAX
Route::get('/fakultas/{fak_id}', 'Ajax\GetProdiController@get_prodi');

// migrating database
Route::get('/install/migration', function() {
	Artisan::call('migrate');
});