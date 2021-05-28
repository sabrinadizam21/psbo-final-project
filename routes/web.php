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

/*Route::get('/konsultasi', function () {
    return view('konsultasi');
});
*/

Route::get('/rekam_medis', function () {
    return view('rekam_medis');
});

Route::get('/jadwal_dokter', function () {
    return view('jadwal_dokter');
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/dokter', 'Auth\LoginController@showDokterLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/dokter', 'Auth\RegisterController@showDokterRegisterForm');
    
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/dokter', 'Auth\LoginController@dokterLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/dokter', 'Auth\RegisterController@createDokter');
    
Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/dokter', 'dokter');