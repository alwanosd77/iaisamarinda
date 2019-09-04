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
    
    
    Route::get('/profil', function () {
        return view('admin.profil');
    });
});

Route::get('/', function () {
    return view('front.home');
});

Route::get('/epanel', function () {
    return view('admin.dasbor');
});


Route::get('/epanel/profil', function () {
    return view('admin.profil');
});

Route::get('/visi-misi', function () {
    return view('front.profil.visimisi');
});

Route::get('/pengurus', function () {
    return view('front.profil.pengurus');
});

Route::get('/berita', function () {
    return view('front.informasi.berita.index');
});
Route::get('/berita/1', function () {
    return view('front.informasi.berita.show');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
