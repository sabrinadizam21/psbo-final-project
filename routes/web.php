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

Route::get('/home', 'HomeController@index')->name('home');
