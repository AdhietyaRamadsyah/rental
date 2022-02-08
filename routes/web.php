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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dashboard'], function(){
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
});

Route::group(['prefix' => 'barang'], function(){
    Route::get('/barang', 'BarangController@index')->name('barang.index');
    route::post('/post','BarangController@store')->name('manage-barang.store');
    Route::get('/barang/{barang}', 'BarangController@edit')->name('barang.edit');
});

Route::group(['prefix' => 'transaksi'], function(){
    Route::get('/transaksi', 'TransaksiController@index')->name('transaksi.index');
});

Route::group(['prefix' => 'pengembalian'], function(){
    Route::get('/pengembalian', 'PengembalianController@index')->name('pengembalian.index');
});

Route::group(['prefix' => 'tambah-data'], function() {
    route::get('barang','BarangController@create')->name('barang.create');
    route::get('/transaksi','TransaksiController@create')->name('transaksi.create');
});

Route::group(['prefix' => 'updated'], function(){
    route::patch('/barang/{id}', 'BarangController@update')->name('updated.data.barang');
});

Route::group(['prefix' => 'destroy'], function(){
    route::delete('barang/{user}', 'BarangController@destroy')->name('destroy.data.barang');
    
});