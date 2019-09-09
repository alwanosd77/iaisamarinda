<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Alert;
use App\Album;
use App\Photo;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            $album = Album::all();
            return datatables()->of($album)->addColumn('action',function($data){
                $button = '<a href="album/show/'.$data->slug.'" ><button type="button" name="view" class="btn btn-success btn-sm m-auto"> <i class="fa fa-cog"></i>Kelola</button>
                    </a>';
                $button .= '&nbsp;&nbsp';
                $button .= '<a href="album/edit/'.$data->slug.'"><button type="button" name="edit" class="btn btn-info btn-sm m-auto"> <i class="fa fa-edit"></i>Edit</button>
                    </a>';
                $button .= '&nbsp;&nbsp';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm m-auto"> <i class="fa fa-trash "></i>Delete</button>
                    ';
                return $button;
            })->rawColumns(['action'])->make(true);
        }
        return view ('admin.galeri.album.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.galeri.album.create');
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
        ]);
        

            $input = array(
            'judul' => $request->judul,
            'slug' => $this->createSlug($request->judul),
            );
            Album::create($input);
        
        
        Alert::success('Data Berhasil Disimpan', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.album');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::where('slug',$id)->firstOrFail();
        $photoCount = Photo::where('album_id',$album->id)->count();
        $photo = Photo::where('album_id',$album->id)->get(); 
        return view('admin.galeri.photo.index',compact('photo','album','photoCount'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::where('slug',$id)->firstOrFail();
        return view ('admin.galeri.album.edit',compact('album'));
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
        $album = Album::findOrFail($id);
        $request->validate([
            'judul' => 'required',
        ]);
        if ($album->judul != $request->judul) {
            $input = array(
                'judul' => $request->judul,
                'slug' => $this->createSlug($request->judul),
            );
            $album->update($input);    
        }
        else{
            $input = array(
                'judul' => $request->judul,
            );
            $album->update($input);
        }
        Alert::success('Data Berhasil Diubah', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  Album::findOrFail($id);
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
        return Album::select('slug')->where('slug','like', $slug.'%')->where('id','<>',$id)->get();
    }
}
