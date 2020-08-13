<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});

 Auth::routes();

// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa.index');


//Simpeda
Route::get('/simpeda', 'SimpedaController@show')->name('simpeda.show');
Route::get('/simpeda/surataktifkuliah', 'SimpedaController@aktifkuliah')->name('simpeda.aktifkuliah');
Route::get('/simpeda/tabel', 'SimpedaController@showDownloaded')->name('simpeda.tabel');
Route::post('simpeda', 'SimpedaController@store')->name('simpeda.store');
Route::get('/simpeda/{id}','SimpedaController@view')->name('simpeda.view');
Route::post('simpeda/update', 'SimpedaController@update')->name('simpeda.update');

Route::get('/simpeda/download/{id}','SimpedaController@downloadPdfAktifKuliah')->name('simpeda.pdfdownload');
// Route::put('/simpeda/{id}', 'SimpedaController@update');




Auth::routes();

