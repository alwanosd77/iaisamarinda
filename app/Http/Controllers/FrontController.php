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
use Mail;
use Alert;
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
    	$profilIndex = Profil::where('slug',$slug)->firstOrFail();
    	return view ('front.profil.profil', compact('profil','profilIndex','kontak','umum','slider','countSlider','berita','countBerita','artikel','countArtikel','agenda','countAgenda','photo','countPhoto'));
    }
    public function kontak($slug){
    	$profil = Profil::all();
    	$kontak = Kontak::all();
    	$kontakIndex = Kontak::where('slug',$slug)->firstOrFail();
    	return view ('front.kontak.kontak', compact('kontak','kontakIndex','profil'));
    }
    public function kontakkami(){
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
        return view ('front.kontak.kontak-kami', compact('profil','kontak','umum','slider','countSlider','berita','countBerita','artikel','countArtikel','agenda','countAgenda','photo','countPhoto'));
    }
    public function kontakkamiStore(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        Mail::send('email',
        array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'subject' => $request->get('subject'),
           'user_message' => $request->get('message')
        ),  function($message)
            {
                $message->from('dauzic99@gmail.com');
                $message->to('admin@iaisamarinda.org', 'Admin')->subject('Website Feedback');
            });
        Alert::success('Pesan Anda Terkirim', 'Berhasil')->persistent('Close');
    return back(); 
    }
}
