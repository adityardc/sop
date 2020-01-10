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
    return redirect(route('login'));
});

// Auth::routes();
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sekper', 'HomeController@sekper')->name('sekper');
Route::get('/pembiayaan', 'HomeController@pembiayaan')->name('pembiayaan');
Route::get('/pengadaan', 'HomeController@pengadaan')->name('pengadaan');
Route::get('/tanaman', 'HomeController@tanaman')->name('tanaman');
Route::get('/pabrik', 'HomeController@pabrik')->name('pabrik');
Route::get('/ti', 'HomeController@ti')->name('ti');
Route::get('/sdm', 'HomeController@sdm')->name('sdm');
Route::get('/mr', 'HomeController@mr')->name('mr');
Route::get('/spi', 'HomeController@spi')->name('spi');
Route::get('/sustainability', 'HomeController@sustainability')->name('sustainability');
Route::get('/pemasaran', 'HomeController@pemasaran')->name('pemasaran');
Route::get('/renstra', 'HomeController@renstra')->name('renstra');
Route::get('/hilir', 'HomeController@hilir')->name('hilir');
Route::get('/hukum', 'HomeController@hukum')->name('hukum');
Route::get('/kinerja', 'HomeController@kinerja')->name('kinerja');
Route::get('/tahunan', 'HomeController@tahunan')->name('tahunan');
Route::get('/strategi', 'HomeController@strategi')->name('strategi');
Route::get('/pelanggan', 'HomeController@pelanggan')->name('pelanggan');