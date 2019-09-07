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
Route::group(['middleware'=>['web']],function(){
    Route::group(['middleware'=>['admin']],function(){
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

            Route::get('/berita/show/{id}', 'BeritaController@show')->name('admin.berita.show');
            Route::get('/berita', 'BeritaController@index')->name('admin.berita');
            Route::get('/berita/create/','BeritaController@create')->name('admin.berita.create');
            Route::post('/berita','BeritaController@store')->name('admin.berita.store');
            Route::get('/berita/delete/{id}', 'BeritaController@destroy')->name('admin.berita.destroy');
            Route::get('/berita/edit/{id}', 'BeritaController@edit')->name('admin.berita.edit');
            Route::post('/berita/update/{id}','BeritaController@update')->name('admin.berita.update');

            Route::get('/artikel/show/{id}', 'ArtikelController@show')->name('admin.artikel.show');
            Route::get('/artikel', 'ArtikelController@index')->name('admin.artikel');
            Route::get('/artikel/create/','ArtikelController@create')->name('admin.artikel.create');
            Route::post('/artikel','ArtikelController@store')->name('admin.artikel.store');
            Route::get('/artikel/delete/{id}', 'ArtikelController@destroy')->name('admin.artikel.destroy');
            Route::get('/artikel/edit/{id}', 'ArtikelController@edit')->name('admin.artikel.edit');
            Route::post('/artikel/update/{id}','ArtikelController@update')->name('admin.artikel.update');

            Route::get('/agenda/show/{id}', 'AgendaController@show')->name('admin.agenda.show');
            Route::get('/agenda', 'AgendaController@index')->name('admin.agenda');
            Route::get('/agenda/create/','AgendaController@create')->name('admin.agenda.create');
            Route::post('/agenda','AgendaController@store')->name('admin.agenda.store');
            Route::get('/agenda/delete/{id}', 'AgendaController@destroy')->name('admin.agenda.destroy');
            Route::get('/agenda/edit/{id}', 'AgendaController@edit')->name('admin.agenda.edit');
            Route::post('/agenda/update/{id}','AgendaController@update')->name('admin.agenda.update');
    
        });
    });
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
