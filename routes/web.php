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
    route::post('/store/{transactions}','TransaksiController@store')->name('manage-transaksi.store');
});

Route::group(['prefix' => 'pengembalian'], function(){
    Route::get('/pengembalian', 'PengembalianController@index')->name('pengembalian.index');
    route::post('store/{transaction}','PengembalianController@store')->name('pengembalian.store');
    route::get('create/{id}', 'PengembalianController@create')->name('pengembalian.create');
});

Route::group(['prefix' => 'tambah-data'], function() {
    route::get('barang','BarangController@create')->name('barang.create');
    route::get('/transaksi/{transactions}','TransaksiController@create')->name('transaksi.create');
});

Route::group(['prefix' => 'updated'], function(){
    route::patch('/barang/{id}', 'BarangController@update')->name('updated.data.barang');
});

Route::group(['prefix' => 'sms'], function(){
    Route::post('post/{transaction}', 'SmsController@store')->name('sms');

});

Route::group(['prefix' => 'laporan'], function(){
    route::get('tampilan','Laporan\LaporanController@cetak')->name('laporan.index');
    route::get('item','Laporan\DaftarBarangController@rekap')->name('laporan.item');
    route::get('transaksi','Laporan\TransaksiController@rekap')->name('laporan.transaksi');
    route::get('return','Laporan\PengembalianController@rekap')->name('laporan.return');
    route::get('dashboard','Laporan\DashboardController@rekap')->name('laporan.dashboard');
});

Route::group(['prefix' => 'destroy'], function(){
    route::delete('barang/{user}', 'BarangController@destroy')->name('destroy.data.barang');
    
});

