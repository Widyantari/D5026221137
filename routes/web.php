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

Route::get('/pegawai','PegawaiControllers@index');
Route::get('/pegawai/tambah','PegawaiControllers@tambah');
Route::post('/pegawai/store','PegawaiControllers@store');
Route::get('/pegawai/edit/{id}','PegawaiControllers@edit');
Route::post('/pegawai/update','PegawaiControllers@update');
Route::get('/pegawai/hapus/{id}','PegawaiControllers@hapus');
