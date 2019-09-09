<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Alert;
use Illuminate\Support\Str;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            $slider = Slider::all();
            return datatables()->of($slider)->addColumn('action',function($data){
                $button = '<a href="slider/edit/'.$data->slug.'"><button type="button" name="edit" class="btn btn-info btn-sm m-auto"> <i class="fa fa-edit"></i>Edit</button>
                    </a>';
                $button .= '&nbsp;&nbsp';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm m-auto"> <i class="fa fa-trash "></i>Delete</button>
                    ';
                return $button;
            })->rawColumns(['action'])->make(true);
        }
        return view ('admin.fitur.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.fitur.slider.create');
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
            'subjudul'=>'required',
            'banner'=>'required|mimes:jpg,jpeg,png',
        ]);
        $new_image_name ='';
        if (Input::file('banner') !== NULL) {
            $image_upload = Input::file('banner');
            $extension = $image_upload->getClientOriginalExtension();
            $new_image_name = 'slider-'. time() .'.'. $extension;

            $img_path = public_path('img/slider');
            $image_upload->move($img_path, $new_image_name);
        }

            $input = array(
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
            'banner' => $new_image_name,
            'slug' => $this->createSlug($request->judul),
            );
            Slider::create($input);
        
        
        Alert::success('Data Berhasil Disimpan', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.slider');
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
        $slider = Slider::where('slug',$id)->firstOrFail();
        return view ('admin.fitur.slider.edit',compact('slider'));
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
        $slider = Slider::findOrFail($id);
        $request->validate([
            'judul'=>'required',
            'subjudul'=>'required',
        ]);
        $slug ='';
        if ($slider->judul != $request->judul) {
            $slug =  $this->createSlug($request->judul);
        }
        else{
            $slug =  $slider->slug;
        }
        $new_image_name ='';
        if (Input::file('banner') !== NULL) {
            File::delete(public_path('/img/slider/'.$slider->banner));
            $image_upload = Input::file('banner');
            $extension = $image_upload->getClientOriginalExtension();
            $new_image_name = 'slider-'. time() .'.'. $extension;

            $img_path = public_path('img/slider');
            $image_upload->move($img_path, $new_image_name);
            $input = array(
                'judul' => $request->judul,
            'subjudul' => $request->subjudul,
            'banner' => $new_image_name,
            'slug' => $slug,
            );
        }
        else{
            $input = array(
               'judul' => $request->judul,
            'subjudul' => $request->subjudul,
            'slug' => $slug,
            );
        }
            
        $slider->update($input);
        
        
        Alert::success('Data Berhasil Diubah', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  Slider::findOrFail($id);
        File::delete(public_path('/img/slider/'.$data->banner));
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
        return Slider::select('slug')->where('slug','like', $slug.'%')->where('id','<>',$id)->get();
    }
}
