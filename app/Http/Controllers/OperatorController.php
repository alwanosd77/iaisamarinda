<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Alert;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            $operator = User::all();
            return datatables()->of($operator)->editColumn('last_login_at',function($operator){
                if ($operator->last_login_at == NULL) {
                    return 'Never';
                }
                else{
                    return $operator->last_login_at->isoFormat('DD MMMM YYYY , hh:mm a');                    
                }
            })->editColumn('last_login_ip',function($operator){
                if ($operator->last_login_ip == NULL) {
                    return 'Never';
                }
                else{
                    return $operator->last_login_ip;                    
                }
            })->addColumn('action',function($data){
                $button = '<a href="operator/edit/'.$data->id.'"><button type="button" name="edit" class="btn btn-info btn-sm m-auto"> <i class="fa fa-edit"></i>Edit</button>
                    </a>';
                    if (Auth::user()->id != $data->id) {
                        $button .= '&nbsp;&nbsp';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm m-auto"> <i class="fa fa-trash "></i>Delete</button>
                    ';
                    }
                
                return $button;
            })->rawColumns(['action'])->make(true);
        }
        return view ('admin.operator.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.operator.create');
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
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|confirmed',

        ]);
        
        $input = array(
            'name' => $request->name,
            'username' => $request->username,
            'password' => $request->password,
            
        );
        User::create($input);
        Alert::success('Data Berhasil Disimpan', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.operator');
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
        $operator = User::findOrFail($id);
        return view ('admin.operator.edit',compact('operator'));
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
        $operator = User::findOrFail($id);
        if ($request->username == $operator->username) {
            $request->validate([
            'name' => 'required',
            'password' => 'required|confirmed',
            ]);
        }
        else{
            
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|confirmed',

        ]);
        }
        
        $input = array(
            'name' => $request->name,
            'username' => $request->username,
            'password' => $request->password,
            
        );
        $operator->update($input);
        Alert::success('Data Berhasil Disimpan', 'Berhasil')->persistent('Close');
        return redirect()->route('admin.operator');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  User::findOrFail($id);
        $data->delete();
    }
}
