<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;
use Alert;
use Illuminate\Support\Str;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        if(request()->ajax()){
            return datatables()->of(Kontak::all())->addColumn('action',function($data){
                $button = '<a href="/kontak/'.$data->slug.'" target="_blank"><button type="button" name="view" class="btn btn-success btn-sm m-auto"> <i class="fa fa-eye"></i>Visit</button>
                    </a>';
                $button .= '&nbsp;&nbsp';
                $button .= '<a href="kontak/edit/'.$data->slug.'"><button type="button" name="edit" class="btn btn-info btn-sm m-auto"> <i class="fa fa-edit"></i>Edit</button>
                    </a>';
                $button .= '&nbsp;&nbsp';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm m-auto"> <i class="fa fa-trash "></i>Delete</button>
                    ';
                return $button;
            })->rawColumns(['action'])->make(true);
        }
        return view ('admin.kontak.index');
    }
    public function create()
    {
        return view ('admin.kontak.create');
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
            'judul' => 'required',
            'isi' => 'required',
        ]);
        $input = array(
            'judul' => $request->judul,
            'isi' => $request->isi,
            'slug' => $this->createSlug($request->judul),
        );
        Kontak::create($input);
        Alert::success('Data Berhasil Disimpan', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.kontak');
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
        $kontak = Kontak::where('slug',$id)->firstOrFail();
        return view ('admin.kontak.edit',compact('kontak'));
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
        $kontak = Kontak::findOrFail($id);
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);
        if ($kontak->judul != $request->judul) {
            $input = array(
                'judul' => $request->judul,
                'isi' => $request->isi,
                'slug' => $this->createSlug($request->judul),
            );
            $kontak->update($input);    
        }
        else{
            $input = array(
                'judul' => $request->judul,
                'isi' => $request->isi,
            );
            $kontak->update($input);
        }
        Alert::success('Data Berhasil Diubah', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.kontak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kontak::findOrFail($id);
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
        return Kontak::select('slug')->where('slug','like', $slug.'%')->where('id','<>',$id)->get();
    }

   
}
