<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
use Alert;
use Illuminate\Support\Str;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            $agenda = Agenda::all();
            return datatables()->of($agenda)->editColumn('waktu',function($agenda){
                return $agenda->waktu->isoFormat('DD MMMM YYYY , hh:mm');
            })->addColumn('action',function($data){
                $button = '<a href="/agenda/'.$data->slug.'" target="_blank"><button type="button" name="view" class="btn btn-success btn-sm m-auto"> <i class="fa fa-eye"></i>Visit</button>
                    </a>';
                $button .= '&nbsp;&nbsp';
                $button .= '<a href="agenda/edit/'.$data->slug.'"><button type="button" name="edit" class="btn btn-info btn-sm m-auto"> <i class="fa fa-edit"></i>Edit</button>
                    </a>';
                $button .= '&nbsp;&nbsp';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm m-auto"> <i class="fa fa-trash "></i>Delete</button>
                    ';
                return $button;
            })->rawColumns(['action'])->make(true);
        }
        return view ('admin.informasi.agenda.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.informasi.agenda.create');
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
            'lokasi' => 'required',
            'tamu' => 'required',
            'waktu' => 'required',
        ]);
        $a = Carbon::create($request->waktu);
        $input = array(
            'judul' => $request->judul,
            'isi' => $request->isi,
            'lokasi' => $request->lokasi,
            'tamu' => $request->tamu,
            'waktu' => $a,
            'user_id' => Auth::id(),
            'slug' => $this->createSlug($request->judul),
        );
        Agenda::create($input);
        Alert::success('Data Berhasil Disimpan', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.agenda');
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
        $agenda = Agenda::where('slug',$id)->firstOrFail();
        return view ('admin.informasi.agenda.edit',compact('agenda'));
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
        $agenda = Agenda::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'lokasi' => 'required',
            'tamu' => 'required',
            'waktu' => 'required',
        ]);
        $slug ='';
        if ($agenda->judul != $request->judul) {
            $slug =  $this->createSlug($request->judul);
        }
        else{
            $slug =  $agenda->slug;
        }
        $a = Carbon::create($request->waktu);
        $input = array(
            'judul' => $request->judul,
            'isi' => $request->isi,
            'lokasi' => $request->lokasi,
            'tamu' => $request->tamu,
            'waktu' => $a,
            'user_id' => Auth::id(),
            'slug' => $slug,
        );
        $agenda->update($input);
        Alert::success('Data Berhasil Disimpan', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.agenda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  Agenda::findOrFail($id);
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
        return Agenda::select('slug')->where('slug','like', $slug.'%')->where('id','<>',$id)->get();
    }
}
