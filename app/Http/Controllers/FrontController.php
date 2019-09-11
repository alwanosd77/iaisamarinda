<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;
use App\Berita;
use App\Agenda;
use App\Artikel;
use App\Kontak;
use App\Umum;
use App\Slider;
use App\Photo;
class FrontController extends Controller
{
    public function index(){
        $profil = Profil::all();
        $kontak = Kontak::all();
        $slider = Slider::all();
    	$photo = Photo::latest()->get();
        $berita = Berita::latest()->get();
        $artikel = Artikel::latest()->get();
        $agenda = Agenda::latest()->get();
        $countBerita = Berita::all()->count();
        $countPhoto = Photo::all()->count();
        $countSlider = Slider::all()->count();
        $countArtikel = Artikel::all()->count();
    	$countAgenda = Agenda::all()->count();
        $umum = Umum::firstOrFail();
    	return view ('front.home', compact('kontak','profil','umum','slider','countSlider','berita','countBerita','artikel','countArtikel','agenda','countAgenda','photo','countPhoto'));
    }
    public function profil($slug){
    	$profil = Profil::all();
    	$kontak = Kontak::all();
    	$profilIndex = Profil::where('slug',$slug)->firstOrFail();
    	return view ('front.profil.profil', compact('profil','profilIndex','kontak'));
    }
    public function kontak($slug){
    	$profil = Profil::all();
    	$kontak = Kontak::all();
    	$kontakIndex = Kontak::where('slug',$slug)->firstOrFail();
    	return view ('front.kontak.kontak', compact('kontak','kontakIndex','profil'));
    }
}
