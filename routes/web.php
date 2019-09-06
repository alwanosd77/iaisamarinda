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

Route::prefix('epanel')->group(function () {
    Route::get('/', function () {
        return view('admin.dasbor');
    });
    
    Route::get('/kontak/show/{id}', 'KontakController@show')->name('admin.kontak.show');
    Route::get('/kontak', 'KontakController@index')->name('admin.kontak');
    Route::get('/kontak/create/','KontakController@create')->name('admin.kontak.create');
    Route::post('/kontak','KontakController@store')->name('admin.kontak.store');
    Route::get('/kontak/delete/{id}', 'KontakController@destroy')->name('admin.kontak.destroy');
    Route::get('/kontak/edit/{id}', 'KontakController@edit')->name('admin.kontak.edit');
    Route::post('/kontak/update/{id}','KontakController@update')->name('admin.kontak.update');

    Route::get('/profil/show/{id}', 'ProfilController@show')->name('admin.profil.show');
    Route::get('/profil', 'ProfilController@index')->name('admin.profil');
    Route::get('/profil/create/','ProfilController@create')->name('admin.profil.create');
    Route::post('/profil','ProfilController@store')->name('admin.profil.store');
    Route::get('/profil/delete/{id}', 'ProfilController@destroy')->name('admin.profil.destroy');
    Route::get('/profil/edit/{id}', 'ProfilController@edit')->name('admin.profil.edit');
    Route::post('/profil/update/{id}','ProfilController@update')->name('admin.profil.update');

    
});




Route::get('/', 'FrontController@index')->name('home');
Route::get('/profil/{slug}', 'FrontController@profil')->name('profil');
Route::get('/kontak/{slug}', 'FrontController@kontak')->name('kontak');


Route::get('/berita', function () {
    return view('front.informasi.berita.index');
});
Route::get('/berita/1', function () {
    return view('front.informasi.berita.show');
});
Auth::routes();

