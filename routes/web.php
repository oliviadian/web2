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
    return view('index');
});

Route::get('/halaman1', function () {
    return view('halaman1');
});
Route::get('/halaman2', function () {
    return view('halaman2');
});
//Route::get('/Mahasiswa', function () {
//    return view('Mahasiswa');
//});
Route::get('halaman/tambah', 'web@tambah');
Route::resource('halaman','web');
Route::resource('mahasiswa', 'MahasiswaController');
Route::resource('tambah', 'MahasiswaController');
Route::resource('user', 'User');
Route::resource('tambahuser', 'User');
Route::resource('edit', 'User');

