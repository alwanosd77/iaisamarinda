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
    Route::group(['middleware'=>['operator']],function(){
        
            Route::prefix('epanel')->group(function () {
            Route::get('/', 'DasborController@index')->name('admin.dasbor');

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

            Route::get('/link/show/{id}', 'LinkController@show')->name('admin.link.show');
            Route::get('/link', 'LinkController@index')->name('admin.link');
            Route::get('/link/create/','LinkController@create')->name('admin.link.create');
            Route::post('/link','LinkController@store')->name('admin.link.store');
            Route::get('/link/delete/{id}', 'LinkController@destroy')->name('admin.link.destroy');
            Route::get('/link/edit/{id}', 'LinkController@edit')->name('admin.link.edit');
            Route::post('/link/update/{id}','LinkController@update')->name('admin.link.update');

            Route::get('/slider/show/{id}', 'SliderController@show')->name('admin.slider.show');
            Route::get('/slider', 'SliderController@index')->name('admin.slider');
            Route::get('/slider/create/','SliderController@create')->name('admin.slider.create');
            Route::post('/slider','SliderController@store')->name('admin.slider.store');
            Route::get('/slider/delete/{id}', 'SliderController@destroy')->name('admin.slider.destroy');
            Route::get('/slider/edit/{id}', 'SliderController@edit')->name('admin.slider.edit');
            Route::post('/slider/update/{id}','SliderController@update')->name('admin.slider.update');

            Route::get('/album/show/{id}', 'AlbumController@show')->name('admin.album.show');
            Route::get('/album', 'AlbumController@index')->name('admin.album');
            Route::get('/album/create/','AlbumController@create')->name('admin.album.create');
            Route::post('/album','AlbumController@store')->name('admin.album.store');
            Route::get('/album/delete/{id}', 'AlbumController@destroy')->name('admin.album.destroy');
            Route::get('/album/edit/{id}', 'AlbumController@edit')->name('admin.album.edit');
            Route::post('/album/update/{id}','AlbumController@update')->name('admin.album.update');

            Route::get('/photo/create/{album}','PhotoController@create')->name('admin.photo.create');
            Route::post('/photo/{album}','PhotoController@store')->name('admin.photo.store');
            Route::get('/photo/delete/{id}', 'PhotoController@destroy')->name('admin.photo.destroy');
            Route::post('/foto/hapus', 'PhotoController@delete')->name('foto.delete');

            Route::get('/peraturan/show/{id}', 'PeraturanController@show')->name('admin.peraturan.show');
            Route::get('/peraturan', 'PeraturanController@index')->name('admin.peraturan');
            Route::get('/peraturan/create/','PeraturanController@create')->name('admin.peraturan.create');
            Route::post('/peraturan','PeraturanController@store')->name('admin.peraturan.store');
            Route::get('/peraturan/delete/{id}', 'PeraturanController@destroy')->name('admin.peraturan.destroy');
            Route::get('/peraturan/edit/{id}', 'PeraturanController@edit')->name('admin.peraturan.edit');
            Route::post('/peraturan/update/{id}','PeraturanController@update')->name('admin.peraturan.update');

            Route::get('/unduhan/show/{id}', 'UnduhanController@show')->name('admin.unduhan.show');
            Route::get('/unduhan', 'UnduhanController@index')->name('admin.unduhan');
            Route::get('/unduhan/create/{peraturan}','UnduhanController@create')->name('admin.unduhan.create');
            Route::post('/unduhan/{peraturan}','UnduhanController@store')->name('admin.unduhan.store');
            Route::get('/unduhan/delete/{id}', 'UnduhanController@destroy')->name('admin.unduhan.destroy');
            Route::get('/unduhan/edit/{id}', 'UnduhanController@edit')->name('admin.unduhan.edit');
            Route::post('/unduhan/update/{id}','UnduhanController@update')->name('admin.unduhan.update');

    
        });
    });
    Route::group(['middleware'=>['admin']],function(){
        
            Route::prefix('epanel')->group(function () {
            

            Route::get('/umum/edit', 'UmumController@edit')->name('admin.umum.edit');
            Route::post('/umum/update','UmumController@update')->name('admin.umum.update');

            Route::get('/operator/show/{id}', 'OperatorController@show')->name('admin.operator.show');
            Route::get('/operator', 'OperatorController@index')->name('admin.operator');
            Route::get('/operator/create/','OperatorController@create')->name('admin.operator.create');
            Route::post('/operator','OperatorController@store')->name('admin.operator.store');
            Route::get('/operator/delete/{id}', 'OperatorController@destroy')->name('admin.operator.destroy');
            Route::get('/operator/edit/{id}', 'OperatorController@edit')->name('admin.operator.edit');
            Route::post('/operator/update/{id}','OperatorController@update')->name('admin.operator.update');

    
        });
    });
});




Route::get('/download/{peraturan}/{filename}/{name}', 'UnduhanController@download');


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
