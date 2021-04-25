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
    return view('home');
});
route::get('coba', function () {
    return view('coba');
});
route::get('profil', function () {
    return view('profil');
});
route::get('home', function () {
    return view('home');
});
route::get('galery', function () {
    return view('galery');
});
route::get('admin', function () {
    return view('admin.admin');
})->middleware('auth');

route::get('admin/managemenbuku', 'BukuController@index');
route::get('admin/managemenbuku/tambah', 'BukuController@tambah');
route::post('admin/managemenbuku/simpan', 'BukuController@simpan');
route::get('admin/managemenbuku/edit/{id}', 'BukuController@edit');
route::post('admin/managemenbuku/update', 'BukuController@update');

route::get('admin/managemenbuku/hapus/{id}', 'BukuController@hapus');

route::get('admin/managemenpenulis', function () {
    return view('admin.managemenpenulis');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
