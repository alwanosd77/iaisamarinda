<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;
use App\Kontak;
class FrontController extends Controller
{
    public function index(){
    	$profil = Profil::all();
    	$kontak = Kontak::all();
    	return view ('front.home', compact('kontak','profil'));
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
