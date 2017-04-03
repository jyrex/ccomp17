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
// GUEST
Route::group(['middleware' => 'home'], function() {

	// Web landing page
	Route::get('/', 'LandingController@pengumuman');

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
});

// Route login dan register
Route::auth();

// Route user yang sudah login (terautentikasi)
Route::group(['middleware' => 'auth'], function() {

	// TIM
	Route::get('/home', 'HomeController@index');
	Route::resource('/team', 'Tim\AnggotaController');
	Route::get('/tambah', 'Tim\TambahAnggotaController@tambah_anggota');
	Route::resource('/submission', 'Tim\SubmissionController');
	Route::resource('/payment', 'PaymentController');
	Route::get('/setting', function() {
		return view('tim.pengaturan');
	});

	// ADMIN
	Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function() {
		// CRUD
		Route::resource('/tim', 'Admin\TimController');
		Route::resource('/peserta', 'Admin\PesertaController');
		Route::resource('/pengumuman', 'Admin\PengumumanController');
		Route::resource('/pembayaran', 'Admin\PembayaranController');
	});
});

// AJAX
Route::get('/fakultas/{fak_id}', 'Ajax\GetProdiController@get_prodi');

// DATABASE
// migrating database
Route::get('/migration/install', function() {
	Artisan::call('migrate');
	return redirect('/');
});
// refresh
Route::get('/migration/refresh', function() {
	Artisan::call('migrate:refresh --seed');
	return redirect('/');
});

// WEB
// down
Route::get('/server/down', function() {
	Artisan::call('down');
	return redirect('/');
});

// up
// delete storage/framework/down secara manual