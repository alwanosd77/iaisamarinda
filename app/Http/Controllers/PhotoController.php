<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Album;
use Illuminate\Support\Facades\File;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($album)
    {
        $Album = Album::where('slug',$album)->firstOrFail();
        return view('admin.galeri.photo.create',compact('Album'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $album)
    {
        $Album = Album::findOrFail($album);
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('img/album/'.$Album->judul.'/'), $imageName);

        $imageUpload = new Photo();
        $imageUpload->photo = $imageName;
        $imageUpload->album_id = $album;
        $imageUpload->save();
        return response()->json(['success' => $imageName]);
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
        //
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  Photo::findOrFail($id);
        $album = $data->album->judul;
        File::delete(public_path('/img/album/'.$album.'/'.$data->photo));
        $data->delete();
    }
    public function delete(Request $request){
        $filename = $request->get('filename');
        $folder = $request->get('folder');
        Photo::where('photo', $filename)->delete();
        $path = public_path() . '/img/album/'.$folder. '/'. $filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }
}
