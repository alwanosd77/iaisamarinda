<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Umum;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Alert;
class UmumController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        $umum = Umum::all();
        return view ('admin.umum.edit',compact('umum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $umum = Umum::findOrFail(1);
        
        $new_image_name ='';
        if (Input::file('struktur') !== NULL) {
            File::delete(public_path('/img/struktur/'.$umum->struktur));
            $image_upload = Input::file('struktur');
            $extension = $image_upload->getClientOriginalExtension();
            $new_image_name = 'struktur-'. time() .'.'. $extension;

            $img_path = public_path('img/struktur');
            $image_upload->move($img_path, $new_image_name);
            $input = array(
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'email' => $request->email,
            'about' => $request->about,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
            'struktur' => $new_image_name,
            );
        }
        else{
            $input = array(
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'email' => $request->email,
            'about' => $request->about,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
            );
        }
        $umum->update($input);        
        Alert::success('Data Berhasil Diubah', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.umum.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
