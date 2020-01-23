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

//eloquent_crud
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{pegawai_id}', 'PegawaiController@edit');
Route::put('/pegawai/update/{pegawai_id}', 'PegawaiController@update');
Route::get('/pegawai/hapus/{pegawai_id}', 'PegawaiController@delete');

//soft_deletes
Route::get('/guru','GuruController@index');
Route::get('/guru/hapus/{id}', 'GuruController@hapus');
Route::get('/guru/trash', 'GuruController@trash');
Route::get('/guru/kembalikan/{id}', 'GuruController@kembalikan');
Route::get('/guru/kembalikan_semua', 'GuruController@kembalikan_semua');
Route::get('/guru/hapus_permanen/{id}', 'GuruController@hapus_permanen');
Route::get('/guru/hapus_permanen_semua', 'GuruController@hapus_permanen_semua');

//one_to_one
Route::get('/pengguna', 'PenggunaController@index');

//one_to_many
Route::get('/article', 'WebController@index');

//many_to_many
Route::get('/anggota', 'DikiController@index');
