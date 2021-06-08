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

Route::get('/index', function () {
    return view('index');
});

Route::get('/konsultasi', function () {
    return view('konsultasi');
});


Route::get('/rekam-medis', function () {
    return view('rekam-medis');
});

Route::get('/jadwal-dokter', function () {
    return view('jadwal-dokter');
});

Route::get('/login-mahasiswa', function () {
    return view('login-mahasiswa');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// STAFF
Route::prefix('admin')->group(function(){
	Route::view('/dashboard','staff.dashboard-staff');
	Route::view('/jadwal-dokter','staff.jadwal-dokter');
	Route::view('/rekam-medis', 'staff.daftar-rekam-medis');
	Route::view('/rekam-medis/individu', 'staff.rekam-medis-individu');
	Route::view('/rekam-medis-tambah', 'staff.tambah-rekam-medis');
});


Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/dokter', 'Auth\LoginController@showDokterLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/dokter', 'Auth\RegisterController@showDokterRegisterForm');
    
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/dokter', 'Auth\LoginController@dokterLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/dokter', 'Auth\RegisterController@createDokter');
    
Route::view('/home', 'home')->middleware('auth');
//Route::view('/admin', 'staff.dashboard-staff');
Route::view('/dokter', 'dokter');

// REKAM MEDIS
Route::prefix('rekam-medis')->group(function(){
	Route::view('/individu', 'rekam-medis-individu');
});


