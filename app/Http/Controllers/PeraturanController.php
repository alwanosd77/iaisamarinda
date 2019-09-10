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
class PeraturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            $peraturan = Peraturan::all();
            return datatables()->of($peraturan)->addColumn('action',function($data){
                $button = '<a href="peraturan/show/'.$data->slug.'" ><button type="button" name="view" class="btn btn-success btn-sm m-auto"> <i class="fa fa-cog"></i>Kelola</button>
                    </a>';
                $button .= '&nbsp;&nbsp';
                $button .= '<a href="peraturan/edit/'.$data->slug.'"><button type="button" name="edit" class="btn btn-info btn-sm m-auto"> <i class="fa fa-edit"></i>Edit</button>
                    </a>';
                $button .= '&nbsp;&nbsp';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm m-auto"> <i class="fa fa-trash "></i>Delete</button>
                    ';
                return $button;
            })->rawColumns(['action'])->make(true);
        }
        return view ('admin.peraturan.peraturan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.peraturan.peraturan.create');
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
            'label'=>'required',
        ]);
        

            $input = array(
            'label' => $request->label,
            'slug' => $this->createSlug($request->label),
            );
            Peraturan::create($input);
        
        
        Alert::success('Data Berhasil Disimpan', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.peraturan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peraturan = Peraturan::where('slug',$id)->firstOrFail();
        $unduhanCount = Unduhan::where('peraturan_id',$peraturan->id)->count();
        $unduhan = Unduhan::where('peraturan_id',$peraturan->id)->get();
        if(request()->ajax()){
            return datatables()->of($unduhan)->editColumn('created_at',function($agenda){
                return $agenda->created_at->isoFormat('DD MMMM YYYY , hh:mm');
            })->editColumn('uploader',function($unduhan){
                return $unduhan->user->name;
            })->addColumn('action',function($data){
                $button = '<a href="/download/'.$data->peraturan->label.'/'.$data->filename.'/'.$data->nama.'" target="_blank"><button type="button" name="view" class="btn btn-success btn-sm m-auto"> <i class="fa fa-download"></i>Download</button>
                    </a>';
                $button .= '&nbsp;&nbsp';
                $button .= '<a href="/epanel/unduhan/edit/'.$data->id.'"><button type="button" name="edit" class="btn btn-info btn-sm m-auto"> <i class="fa fa-edit"></i>Edit</button>
                    </a>';
                $button .= '&nbsp;&nbsp';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm m-auto"> <i class="fa fa-trash "></i>Delete</button>
                    ';
                return $button;
            })->rawColumns(['action'])->make(true);
        }
        return view('admin.peraturan.unduhan.index',compact('unduhan','peraturan','unduhanCount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peraturan = Peraturan::where('slug',$id)->firstOrFail();
        return view ('admin.peraturan.peraturan.edit',compact('peraturan'));
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
        $peraturan = Peraturan::findOrFail($id);
        $request->validate([
            'label' => 'required',
        ]);
        File::moveDirectory(public_path('file/'.$peraturan->label),public_path('file/'.$request->label));
        if ($peraturan->label != $request->label) {
            $input = array(
                'label' => $request->label,
                'slug' => $this->createSlug($request->label),
            );
            $peraturan->update($input);    
        }
        else{
            $input = array(
                'label' => $request->label,
            );
            $peraturan->update($input);
        }
        Alert::success('Data Berhasil Diubah', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.peraturan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  Peraturan::findOrFail($id);
        File::deleteDirectory(public_path('file/'.$data->label));
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
        return Peraturan::select('slug')->where('slug','like', $slug.'%')->where('id','<>',$id)->get();
    }
}
