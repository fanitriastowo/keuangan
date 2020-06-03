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

Route::get('/', 'DashboardController@index');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/kategori', 'KategoriController@index')->name('kategori');
Route::get('/kategori/tambah_kategori', 'KategoriController@tambahPage')->name('kategori.tambah_kategori');
Route::post('/kategori/tambah', 'KategoriController@tambah')->name('kategori.tambah');
Route::get('/kategori/destroy/{id}', 'KategoriController@destroy')->name('kategori.destroy');
Route::get('/kategori/edit/{id}', 'KategoriController@editPage')->name('kategori.edit');
Route::post('/kategori/update/{id}', 'KategoriController@update')->name('kategori.update');

Route::get('/transaksi', 'TransaksiController@index')->name('transaksi');
Route::get('/transaksi/tambah_transaksi', 'TransaksiController@tambahPage')->name('transaksi.tambah_transaksi');
Route::post('/transaksi/tambah', 'TransaksiController@tambah')->name('transaksi.tambah');
Route::get('/transaksi/destroy/{id}', 'TransaksiController@destroy')->name('transaksi.destroy');
Route::get('/transaksi/edit/{id}', 'TransaksiController@editPage')->name('transaksi.edit');
Route::post('/transaksi/edit/{id}', 'TransaksiController@update')->name('transaksi.update');
Route::post('/transaksi/filter', 'TransaksiController@filter')->name('transaksi.filter');
