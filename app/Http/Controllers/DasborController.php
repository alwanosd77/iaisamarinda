<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Berita;
use App\Agenda;
use App\Album;
use App\Photo;
class DasborController extends Controller
{
    public function index()
    {
    	$countArtikel = Artikel::all()->count();
    	$countAlbum = Album::all()->count();
    	$countAgenda = Agenda::all()->count();
    	$countBerita = Berita::all()->count();
    	$countPhoto = Photo::all()->count();
    	$photo = Photo::latest()->get();
    	$berita = Berita::latest()->get();
    	$artikel = Artikel::latest()->get();
    	$agenda = Agenda::latest()->get();
    	return view ('admin.dasbor',compact('countAgenda','countAlbum','countBerita','countArtikel','berita','artikel','agenda','photo','countPhoto'));
    }
}
