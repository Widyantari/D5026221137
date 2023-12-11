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
    return view('welcome');
});

Route::get('/blog2', function () {
    return view('blog');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/link', function () {
    return view('link');
});

Route::get('/responsive', function () {
    return view('responsive');
});

Route::get('/latihan', function () {
    return view('latihan');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/js2', function () {
    return view('js2');
});

Route::get('/validasi1', function () {
    return view('validasi1');
});

Route::get('perkalian','App\Http\Controllers\DosenController@index');
Route::get('show','App\Http\Controllers\DosenController@showBlog');

Route::get('/pegawai/{nama}', 'App\Http\Controllers\DosenController@shownama');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

//pagination
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');

//tugas pra eas
Route::get('/bagian','App\Http\Controllers\BagianController@index');
Route::get('/bagian/tambah','App\Http\Controllers\BagianController@tambah');
Route::post('/bagian/store','App\Http\Controllers\BagianController@store');
Route::get('/bagian/edit/{id}','App\Http\Controllers\BagianController@edit');
Route::post('/bagian/update','App\Http\Controllers\BagianController@update');
Route::get('/bagian/hapus/{id}','App\Http\Controllers\BagianController@hapus');
Route::get('/bagian/view/{id}','App\Http\Controllers\BagianController@view');
Route::get('/bagian/cari','App\Http\Controllers\BagianController@cari');

//eas
Route::get('/karyawan','App\Http\Controllers\KaryawanController@index');
Route::get('/karyawan/tambah','App\Http\Controllers\KaryawanController@tambah');
Route::post('/karyawan/store','App\Http\Controllers\KaryawanController@store');
Route::get('/karyawan/hapus/{id}','App\Http\Controllers\KaryawanController@hapus');
Route::get('/karyawan/cari','App\Http\Controllers\KaryawanController@cari');
Route::get('/karyawan/input', 'App\Http\Controllers\KaryawanController@input');
Route::get('/karyawan/proses', 'App\Http\Controllers\KaryawanController@proses');







