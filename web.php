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
    //return view('welcome');
    echo "Selamat Datang Fara Nisha";
});

Route::get('/satu', function () {
    //return view('welcome');
    echo "One";
});

Route::get('/dua', function () {
    //return view('welcome');
    echo "Two";
});

Route::get('/tiga', function () {
    //return view('welcome');
    echo "Three";
});

Route::get('/empat', function () {
    //return view('welcome');
    echo "Four";
});

Route::get('/lima', function () {
    //return view('welcome');
    echo "Five";
});

Route::get('/enam', function () {
    //return view('welcome');
    echo "Six";
});

Route::get('/tujuh', function () {
    //return view('welcome');
    echo "Seven";
});

Route::get('/delapan', function () {
    //return view('welcome');
    echo "Eight";
});

Route::get('/sembilan', function () {
    //return view('welcome');
    echo "Nine";
});
//1. ECHO LANGSUNG NESTED
Route::get('/sepuluh', function () {
    //return view('welcome');
    echo "Ten";
});

// 2. MEMANGGIL VIEW
Route::get('/nemplate', function () {
    return view('template');
    //lokasi view
});

// 3. MEMANGGIL CONTROLLER

//Route::get('/usang', 'usang@index');

/* file controllernya bernama UsangController
nama url usang
index itu nama function */

Route::get('/bakso', 'usang@bakar');

//Route::get('/', 'Kontak@index');

//Route::get('/CleaningService', 'CleanerController@Clean');

Route::resource('kontak', 'Kontak');

Route::get('/', function(){
  return view('index');
});

Route::get('login','Login@index');
Route::post('login/cek','Login@cek');
Route::get('/','Dashboard@index');
Route::get('/logout','login@logout');

Route::resource('/satpam','Satpam');

Route::resource('/kabupaten','Kabupaten');

Route::resource('/penjualan','Penjualan');
Route::resource('/barang','Barang');
Route::resource('/pembelian','Pembelian');
