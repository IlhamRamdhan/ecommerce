<?php 

Route::get('/dashboard', 'Admin\PageController@index')->name('dashboard');

Route::get('/pembeli', 'Admin\PageController@pembeli')->name('pembeli');

Route::get('/daftar_produk', 'Admin\ProdukController@index')->name('produk');
Route::get('/daftar_produk/add', 'Admin\ProdukController@add')->name('add.produk');
Route::post('/daftar_produk/store','Admin\ProdukController@store');
Route::get('/daftar_produk/{id}','Admin\ProdukController@edit')->name('edit.produk');
Route::post('/daftar_produk/update','Admin\ProdukController@update');
Route::get('/daftar_produk/hapus/{id}','Admin\ProdukController@hapus');

Route::get('/pesanan', 'Admin\PesananController@index')->name('pesanan');

Route::get('/detail_pesanan', 'Admin\DetailController@index')->name('detail');