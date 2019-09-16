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
use App\Lowongan;
use App\Link;

class PelayananController extends Controller
{
    public function rekomendasi()
    {
    	$profil = Profil::all();
        $link = Link::all();
        $kontak = Kontak::all();
        $slider = Slider::all();
        $berita = Berita::latest()->get();
        $artikel = Artikel::latest()->get();
        $agenda = Agenda::latest()->get();
        $countBerita = Berita::all()->count();
        $countSlider = Slider::all()->count();
        $countArtikel = Artikel::all()->count();
        $countAgenda = Agenda::all()->count();
        $umum = Umum::firstOrFail();
    	return view ('front.pelayanan.rekomendasi', compact('profil','kontak','umum','slider','countSlider','berita','countBerita','artikel','countArtikel','agenda','countAgenda','link'));
    }
    public function mutasi()
    {
    	$profil = Profil::all();
        $link = Link::all();
        $kontak = Kontak::all();
        $slider = Slider::all();
        $berita = Berita::latest()->get();
        $artikel = Artikel::latest()->get();
        $agenda = Agenda::latest()->get();
        $countBerita = Berita::all()->count();
        $countSlider = Slider::all()->count();
        $countArtikel = Artikel::all()->count();
        $countAgenda = Agenda::all()->count();
        $umum = Umum::firstOrFail();
    	return view ('front.pelayanan.mutasi', compact('profil','kontak','umum','slider','countSlider','berita','countBerita','artikel','countArtikel','agenda','countAgenda','link'));
    }
    public function resertifikasi()
    {
    	$profil = Profil::all();
        $link = Link::all();
        $kontak = Kontak::all();
        $slider = Slider::all();
        $berita = Berita::latest()->get();
        $artikel = Artikel::latest()->get();
        $agenda = Agenda::latest()->get();
        $countBerita = Berita::all()->count();
        $countSlider = Slider::all()->count();
        $countArtikel = Artikel::all()->count();
        $countAgenda = Agenda::all()->count();
        $umum = Umum::firstOrFail();
    	return view ('front.pelayanan.resertifikasi', compact('profil','kontak','umum','slider','countSlider','berita','countBerita','artikel','countArtikel','agenda','countAgenda','link'));
    }

    public function lowongan(){
        $profil = Profil::all();
        $kontak = Kontak::all();
        $link = Link::all();
        $slider = Slider::all();
        $berita = Berita::latest()->get();
        $lowongan = Lowongan::latest()->paginate(5);
        $artikel = Artikel::latest()->get();
        $agenda = Agenda::latest()->get();
        $countBerita = Berita::all()->count();
        $countSlider = Slider::all()->count();
        $countArtikel = Artikel::all()->count();
        $countAgenda = Agenda::all()->count();
        $umum = Umum::firstOrFail();
        return view ('front.pelayanan.lowongan.index', compact('profil','kontak','umum','slider','countSlider','lowongan','countBerita','artikel','countArtikel','agenda','countAgenda','berita','link'));
    }
    public function lowonganShow($slug){
        $profil = Profil::all();
        $link = Link::all();
        $kontak = Kontak::all();
        $lowongan = Lowongan::where('slug',$slug)->firstOrFail();
        $slider = Slider::all();
        $berita = Berita::latest()->get();
        $artikel = Artikel::latest()->get();
        $agenda = Agenda::latest()->get();
        $countBerita = Berita::all()->count();
        $countSlider = Slider::all()->count();
        $countArtikel = Artikel::all()->count();
        $countAgenda = Agenda::all()->count();
        $umum = Umum::firstOrFail();
        return view ('front.pelayanan.lowongan.show', compact('profil','kontak','umum','slider','countSlider','lowongan','countBerita','artikel','countArtikel','agenda','countAgenda','berita','link'));
    }
}
