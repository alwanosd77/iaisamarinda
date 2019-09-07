<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use Alert;
use Illuminate\Support\Str;
use Auth;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            $berita = Berita::all();
            return datatables()->of($berita)->editColumn('uploader',function($berita){
                return $berita->user->name;
            })->addColumn('action',function($data){
                $button = '<a href="/berita/'.$data->slug.'" target="_blank"><button type="button" name="view" class="btn btn-success btn-sm m-auto"> <i class="fa fa-eye"></i>Visit</button>
                    </a>';
                $button .= '&nbsp;&nbsp';
                $button .= '<a href="berita/edit/'.$data->slug.'"><button type="button" name="edit" class="btn btn-info btn-sm m-auto"> <i class="fa fa-edit"></i>Edit</button>
                    </a>';
                $button .= '&nbsp;&nbsp';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm m-auto"> <i class="fa fa-trash "></i>Delete</button>
                    ';
                return $button;
            })->rawColumns(['action'])->make(true);
        }
        return view ('admin.informasi.berita.index');
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
        //
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
