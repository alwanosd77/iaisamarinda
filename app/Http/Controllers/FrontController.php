<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;
use App\Berita;
use App\Agenda;
use App\Artikel;
use App\Album;
use App\Kontak;
use App\Umum;
use App\Slider;
use App\Photo;
use App\Peraturan;
use App\Unduhan;
use App\Link;
use Mail;
use Alert;
class FrontController extends Controller
{
    public function index(){
        $profil = Profil::all();
        $link = Link::all();
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
    	return view ('front.home', compact('kontak','profil','umum','slider','countSlider','berita','countBerita','artikel','countArtikel','agenda','countAgenda','photo','countPhoto','link'));
    }
    public function profil($slug){
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
    	$profilIndex = Profil::where('slug',$slug)->firstOrFail();
    	return view ('front.profil.profil', compact('profil','profilIndex','kontak','umum','slider','countSlider','berita','countBerita','artikel','countArtikel','agenda','countAgenda','link'));
    }
    public function kontak($slug){
    	$profil = Profil::all();
        $link = Link::all();
    	$kontak = Kontak::all();
    	$kontakIndex = Kontak::where('slug',$slug)->firstOrFail();
        $slider = Slider::all();
        $berita = Berita::latest()->get();
        $artikel = Artikel::latest()->get();
        $agenda = Agenda::latest()->get();
        $countBerita = Berita::all()->count();
        $countSlider = Slider::all()->count();
        $countArtikel = Artikel::all()->count();
        $countAgenda = Agenda::all()->count();
        $umum = Umum::firstOrFail();
    	return view ('front.kontak.kontak', compact('kontak','kontakIndex','profil','umum','slider','countSlider','berita','countBerita','artikel','countArtikel','agenda','countAgenda','link'));
    }
    public function kontakkami(){
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
        return view ('front.kontak.kontak-kami', compact('profil','kontak','umum','slider','countSlider','berita','countBerita','artikel','countArtikel','agenda','countAgenda','link'));
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

    public function peraturan(){
        $profil = Profil::all();
        $link = Link::all();
        $kontak = Kontak::all();
        $slider = Slider::all();
        $peraturan = Peraturan::all();
        $unduhan = Unduhan::all();
        $berita = Berita::latest()->get();
        $artikel = Artikel::latest()->get();
        $agenda = Agenda::latest()->get();
        $countBerita = Berita::all()->count();
        $countSlider = Slider::all()->count();
        $countArtikel = Artikel::all()->count();
        $countAgenda = Agenda::all()->count();
        $umum = Umum::firstOrFail();
        return view ('front.peraturan', compact('profil','kontak','umum','slider','countSlider','berita','countBerita','artikel','countArtikel','agenda','countAgenda','peraturan','unduhan','link'));
    }

    public function beritaIndex(){
        $profil = Profil::all();
        $kontak = Kontak::all();
        $link = Link::all();
        $slider = Slider::all();
        $beritaIndex = Berita::latest()->paginate(5);
        $artikel = Artikel::latest()->get();
        $berita = Berita::latest()->get();
        $agenda = Agenda::latest()->get();
        $countBerita = Berita::all()->count();
        $countSlider = Slider::all()->count();
        $countArtikel = Artikel::all()->count();
        $countAgenda = Agenda::all()->count();
        $umum = Umum::firstOrFail();
        return view ('front.informasi.berita.index', compact('profil','kontak','umum','slider','countSlider','berita','countBerita','artikel','countArtikel','agenda','countAgenda','beritaIndex','link'));
    }
    public function beritaShow($slug){
        $link = Link::all();
        $profil = Profil::all();
        $kontak = Kontak::all();
        $slider = Slider::all();
        $berita = Berita::latest()->get();
        $beritaAll = Berita::all();
        $beritaShow = Berita::where('slug',$slug)->firstOrFail();
        $id = $beritaShow->id;
        $beritaPrev = Berita::where('id','<',$beritaShow->id)->max('id')-1;
        $beritaNext = Berita::where('id','>',$beritaShow->id)->min('id')-1;
        $artikel = Artikel::latest()->get();
        $agenda = Agenda::latest()->get();
        $countBerita = Berita::all()->count();
        $countSlider = Slider::all()->count();
        $countArtikel = Artikel::all()->count();
        $countAgenda = Agenda::all()->count();
        $umum = Umum::firstOrFail();
        return view ('front.informasi.berita.show', compact('profil','kontak','umum','slider','countSlider','berita','countBerita','artikel','countArtikel','agenda','countAgenda','beritaPrev','beritaNext','beritaAll','beritaShow','link'));
    }

    public function artikelIndex(){
        $profil = Profil::all();
        $kontak = Kontak::all();
        $link = Link::all();
        $slider = Slider::all();
        $berita = Berita::latest()->get();
        $artikelIsi = Artikel::latest()->paginate(5);
        $artikel = Artikel::latest()->get();
        $agenda = Agenda::latest()->get();
        $countBerita = Berita::all()->count();
        $countSlider = Slider::all()->count();
        $countArtikel = Artikel::all()->count();
        $countAgenda = Agenda::all()->count();
        $umum = Umum::firstOrFail();
        return view ('front.informasi.artikel.index', compact('profil','kontak','umum','slider','countSlider','artikelIsi','countBerita','artikel','countArtikel','agenda','countAgenda','berita','link'));
    }
    public function artikelShow($slug){
        $link = Link::all();
        $profil = Profil::all();
        $kontak = Kontak::all();
        $slider = Slider::all();
        $berita = Berita::latest()->get();
        $artikelAll = Artikel::all();
        $artikelIsi = Artikel::where('slug',$slug)->firstOrFail();
        $id = $artikelIsi->id;
        $artikelIsiPrev = Artikel::where('id','<',$artikelIsi->id)->max('id')-1;
        $artikelIsiNext = Artikel::where('id','>',$artikelIsi->id)->min('id')-1;
        $artikel = Artikel::latest()->get();
        $agenda = Agenda::latest()->get();
        $countBerita = Berita::all()->count();
        $countSlider = Slider::all()->count();
        $countArtikel = Artikel::all()->count();
        $countAgenda = Agenda::all()->count();
        $umum = Umum::firstOrFail();
        return view ('front.informasi.artikel.show', compact('profil','kontak','umum','slider','countSlider','artikelIsi','countBerita','artikel','countArtikel','agenda','countAgenda','artikelIsiPrev','artikelIsiNext','artikelAll','berita','link'));
    }

    public function agendaIndex(){
        $profil = Profil::all();
        $kontak = Kontak::all();
        $link = Link::all();
        $slider = Slider::all();
        $berita = Berita::latest()->get();
        $agendaIsi = Agenda::latest()->paginate(5);
        $artikel = Artikel::latest()->get();
        $agenda = Agenda::latest()->get();
        $countBerita = Berita::all()->count();
        $countSlider = Slider::all()->count();
        $countArtikel = Artikel::all()->count();
        $countAgenda = Agenda::all()->count();
        $umum = Umum::firstOrFail();
        return view ('front.informasi.agenda.index', compact('profil','kontak','umum','slider','countSlider','agendaIsi','countBerita','artikel','countArtikel','agenda','countAgenda','berita','link'));
    }
    public function agendaShow($slug){
        $profil = Profil::all();
        $link = Link::all();
        $kontak = Kontak::all();
        $slider = Slider::all();
        $berita = Berita::latest()->get();
        $agendaAll = Agenda::all();
        $agendaIsi = Agenda::where('slug',$slug)->firstOrFail();
        $id = $agendaIsi->id;
        $agendaIsiPrev = Agenda::where('id','<',$agendaIsi->id)->max('id')-1;
        $agendaIsiNext = Agenda::where('id','>',$agendaIsi->id)->min('id')-1;
        $artikel = Artikel::latest()->get();
        $agenda = Agenda::latest()->get();
        $countBerita = Berita::all()->count();
        $countSlider = Slider::all()->count();
        $countArtikel = Artikel::all()->count();
        $countAgenda = Agenda::all()->count();
        $umum = Umum::firstOrFail();
        return view ('front.informasi.agenda.show', compact('profil','kontak','umum','slider','countSlider','agendaIsi','countBerita','artikel','countArtikel','agenda','countAgenda','agendaIsiPrev','agendaIsiNext','agendaAll','berita','link'));
    }
    public function albumIndex(){
        $profil = Profil::all();
        $link = Link::all();
        $kontak = Kontak::all();
        $slider = Slider::all();
        $berita = Berita::latest()->get();
        $albumIsi = Album::latest()->paginate(6);
        $artikel = Artikel::latest()->get();
        $agenda = Agenda::latest()->get();
        $countBerita = Berita::all()->count();
        $countSlider = Slider::all()->count();
        $countArtikel = Artikel::all()->count();
        $countAgenda = Agenda::all()->count();
        $umum = Umum::firstOrFail();
        return view ('front.informasi.album.index', compact('profil','kontak','umum','slider','countSlider','albumIsi','countBerita','artikel','countArtikel','agenda','countAgenda','berita','link'));
    }
    public function albumShow($slug){
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
        $album = Album::where('slug',$slug)->firstOrFail();
        $photoCount = Photo::where('album_id',$album->id)->count();
        $photo = Photo::where('album_id',$album->id)->paginate(20); 
        return view ('front.informasi.album.show', compact('profil','kontak','umum','slider','countSlider','countBerita','artikel','countArtikel','agenda','countAgenda','berita','photo','countPhoto','link'));
    }
}
