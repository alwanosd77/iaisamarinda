<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Alert;
use App\Peraturan;
use App\Unduhan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
class UnduhanController extends Controller
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
    public function create($peraturan)
    {
        $Peraturan = Peraturan::where('slug',$peraturan)->firstOrFail();
        return view('admin.peraturan.unduhan.create',compact('Peraturan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $peraturan)
    {
        $Peraturan = Peraturan::findOrFail($peraturan);
        $request->validate([
            'nama'=>'required',
            'filename'=>'required|mimes:pdf,doc,docx',
        ]);
        $new_file_name ='';
        if (Input::file('filename') !== NULL) {
            $file_upload = Input::file('filename');
            $extension = $file_upload->getClientOriginalExtension();
            $new_file_name = $Peraturan->label. time() .'.'. $extension;

            $file_path = public_path('file/'.$Peraturan->label);
            $file_upload->move($file_path, $new_file_name);
        }

            $input = array(
            'nama' => $request->nama,
            'filename' => $new_file_name,
            'user_id' => Auth::id(),
            'peraturan_id' => $Peraturan->id,
            );
        Unduhan::create($input);        
        Alert::success('Data Berhasil Disimpan', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.peraturan.show',$Peraturan->slug);
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
        $unduhan = Unduhan::findOrFail($id);
        return view ('admin.peraturan.unduhan.edit',compact('unduhan'));
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
        $unduhan = Unduhan::findOrFail($id);
        $request->validate([
            'nama'=>'required',
            'filename'=>'mimes:pdf,docx,doc',
        ]);
        $new_file_name ='';
        if (Input::file('filename') !== NULL) {
            File::delete(public_path('/file/'.$unduhan->peraturan->label.'/'.$unduhan->filename));
            $file_upload = Input::file('filename');
            $extension = $file_upload->getClientOriginalExtension();
            $new_file_name = $unduhan->peraturan->label. time() .'.'. $extension;

            $file_path = public_path('file/'.$unduhan->peraturan->label);
            $file_upload->move($file_path, $new_file_name);

            $input = array(
            'nama' => $request->nama,
            'filename' => $new_file_name,
            'user_id' => Auth::id(),
            );
        $unduhan->update($input);        
        }
        else{
            $input = array(
            'nama' => $request->nama,
            'user_id' => Auth::id(),
            );
        $unduhan->update($input);        
        }

            
        Alert::success('Data Berhasil Disimpan', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.peraturan.show',$unduhan->peraturan->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  Unduhan::findOrFail($id);
        File::delete(public_path('/file/'.$data->peraturan->label.'/'.$data->filename));
        $data->delete();
    }
    public function download($peraturan,$filename,$name){
        $path = public_path('file/'.$peraturan.'/'.$filename);
        return response()->download($path,$name);
    }
}
