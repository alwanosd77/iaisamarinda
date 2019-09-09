<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use Alert;
use Illuminate\Support\Str;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            $artikel = Artikel::all();
            return datatables()->of($artikel)->editColumn('uploader',function($artikel){
                return $artikel->user->name;
            })->addColumn('action',function($data){
                $button = '<a href="/artikel/'.$data->slug.'" target="_blank"><button type="button" name="view" class="btn btn-success btn-sm m-auto"> <i class="fa fa-eye"></i>Visit</button>
                    </a>';
                $button .= '&nbsp;&nbsp';
                $button .= '<a href="artikel/edit/'.$data->slug.'"><button type="button" name="edit" class="btn btn-info btn-sm m-auto"> <i class="fa fa-edit"></i>Edit</button>
                    </a>';
                $button .= '&nbsp;&nbsp';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm m-auto"> <i class="fa fa-trash "></i>Delete</button>
                    ';
                return $button;
            })->rawColumns(['action'])->make(true);
        }
        return view ('admin.informasi.artikel.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.informasi.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'isi'=>'required',
            'penulis'=>'required',
            'cover'=>'required|mimes:jpg,jpeg,png',
            'is_draft'=>'required',
        ]);
        $new_image_name ='';
        if (Input::file('cover') !== NULL) {
            $image_upload = Input::file('cover');
            $extension = $image_upload->getClientOriginalExtension();
            $new_image_name = 'coverartikel-'. time() .'.'. $extension;

            $img_path = public_path('img/cover/artikel');
            $image_upload->move($img_path, $new_image_name);
        }

            $input = array(
            'judul' => $request->judul,
            'preview' => $request->preview,
            'isi' => $request->isi,
            'is_draft' => $request->is_draft,
            'penulis' => $request->penulis,
            'cover' => $new_image_name,
            'slug' => $this->createSlug($request->judul),
            'user_id' => Auth::id(),
            );
            Artikel::create($input);
        
        
        Alert::success('Data Berhasil Disimpan', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::where('slug',$id)->firstOrFail();
        return view ('admin.informasi.artikel.edit',compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);
        $request->validate([
            'judul'=>'required',
            'isi'=>'required',
            'penulis'=>'required',
            'is_draft'=>'required',
        ]);
        $slug ='';
        if ($artikel->judul != $request->judul) {
            $slug =  $this->createSlug($request->judul);
        }
        else{
            $slug =  $artikel->slug;
        }
        $new_image_name ='';
        if (Input::file('cover') !== NULL) {
            File::delete(public_path('/img/cover/artikel/'.$artikel->cover));
            $image_upload = Input::file('cover');
            $extension = $image_upload->getClientOriginalExtension();
            $new_image_name = 'coverartikel-'. time() .'.'. $extension;

            $img_path = public_path('img/cover/artikel');
            $image_upload->move($img_path, $new_image_name);
            $input = array(
                'judul' => $request->judul,
                'isi' => $request->isi,
                'is_draft' => $request->is_draft,
                'penulis' => $request->penulis,
                'cover' => $new_image_name,
                'slug' => $slug,
                'user_id' => Auth::id(),
            );
        }
        else{
            $input = array(
                'judul' => $request->judul,
                'isi' => $request->isi,
                'is_draft' => $request->is_draft,
                'penulis' => $request->penulis,
                'slug' => $slug,
                'user_id' => Auth::id(),
            );
        }
            
        $artikel->update($input);
        
        
        Alert::success('Data Berhasil Diubah', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  Artikel::findOrFail($id);
        File::delete(public_path('/img/cover/artikel/'.$data->cover));
        $data->delete();
    }
    public function createSlug($title, $id=0){
        $slug = Str::slug($title, '-');
        $allSlugs = $this->getRelatedSlugs($slug, $id);
        if (! $allSlugs->contains('slug', $slug)) {
            return $slug;
        }
        for($i = 1; $i <= 10; $i++){
            $newSlug = $slug.'-'.$i;
            if (! $allSlugs->contains('slug', $newSlug)) {
            return $newSlug;
            }   
        }
        throw new \Exception('Tidak Bisa Membuat Slug baru');
        
    }
    public function getRelatedSlugs($slug, $id=0){
        return Artikel::select('slug')->where('slug','like', $slug.'%')->where('id','<>',$id)->get();
    }
}
