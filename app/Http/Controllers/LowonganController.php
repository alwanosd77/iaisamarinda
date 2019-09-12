<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lowongan;
use Alert;
use Auth;
use Illuminate\Support\Str;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $lowongan = Lowongan::all();
        if(request()->ajax()){
            return datatables()->of(Lowongan::all())->editColumn('uploader',function($lowongan){
                return $lowongan->user->name;
            })->editColumn('created_at',function($lowongan){
                return $lowongan->created_at->isoFormat('DD MMMM YYYY , hh:mm a');
            })->addColumn('action',function($data){
                $button = '<a href="/lowongan/'.$data->slug.'" target="_blank"><button type="button" name="view" class="btn btn-success btn-sm m-auto"> <i class="fa fa-eye"></i>Visit</button>
                    </a>';
                $button .= '&nbsp;&nbsp';
                $button .= '<a href="lowongan/edit/'.$data->slug.'"><button type="button" name="edit" class="btn btn-info btn-sm m-auto"> <i class="fa fa-edit"></i>Edit</button>
                    </a>';
                $button .= '&nbsp;&nbsp';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm m-auto"> <i class="fa fa-trash "></i>Delete</button>
                    ';
                return $button;
            })->rawColumns(['action'])->make(true);
        }
        return view ('admin.fitur.lowongan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.fitur.lowongan.create');
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
            'judul' => 'required|max:191',
            'pemberi_kerja' => 'required|max:191',
            'isi' => 'required',
        ]);
        $input = array(
            'judul' => $request->judul,
            'pemberi_kerja' => $request->pemberi_kerja,
            'isi' => $request->isi,
            'slug' => $this->createSlug($request->judul),
            'user_id' => Auth::id(),
        );
        Lowongan::create($input);
        Alert::success('Data Berhasil Disimpan', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.lowongan');
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
        $lowongan = Lowongan::where('slug',$id)->firstOrFail();
        return view ('admin.fitur.lowongan.edit',compact('lowongan'));
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
        $lowongan = Lowongan::findOrFail($id);
        $request->validate([
            'judul' => 'required|max:191',
            'pemberi_kerja' => 'required|max:191',
            'isi' => 'required',
        ]);
        if ($lowongan->judul != $request->judul) {
            $input = array(
                'judul' => $request->judul,
            'pemberi_kerja' => $request->pemberi_kerja,
            'isi' => $request->isi,
            'slug' => $this->createSlug($request->judul),
            'user_id' => Auth::id(),
            );
            $lowongan->update($input);    
        }
        else{
            $input = array(
                'judul' => $request->judul,
            'pemberi_kerja' => $request->pemberi_kerja,
                'isi' => $request->isi,
            'user_id' => Auth::id(),
            );
            $lowongan->update($input);
        }
        Alert::success('Data Berhasil Diubah', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.lowongan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Lowongan::findOrFail($id);
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
        throw new \Exception('Tidak Bisa Membuat Sluq baru');
        
    }
    public function getRelatedSlugs($slug, $id=0){
        return Lowongan::select('slug')->where('slug','like', $slug.'%')->where('id','<>',$id)->get();
    }
}
