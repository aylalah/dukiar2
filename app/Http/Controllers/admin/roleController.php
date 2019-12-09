<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;

class roleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        switch(auth()->user()->role_id){
            // case '1':  
            // return view('admin.index');
            // break;

            case '2':  
            return view('operator.index');
            break;

            case '3':  
            return view('payer.index');
            break;

            case '4':  
            return view('logistics.index');
            break;

            case '5':  
            return view('proccess.index');
            break;

            case '6':  
            return view('equip.index');
            break;

            case '7':  
            return view('vault.index');
            break;

            // default: 
            // return view('app.login');
            // break;
        }
       
        $role = Role::all();
        return view('admin.role')->with('data', $role);
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
        // $addRole = new Role;
        // $addRole -> role_name = $request -> input('r_name');
        // $addRole -> role_desc = $request -> input('r_descp');
        // $addRole -> role_status = $request -> input('r_status');

        //         $settings->save();
        //         if($settings->save()){
        //             return redirect('/Role')->with('success', 'Saved Successfully');
        //         }
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
        $role = Role::all();
        return view('admin.role')->with('data', $role);
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
        $update = Admin::find($id); 

        if($update -> status == 'active'){
            $update -> status = 'suspended';
        } else{ $update -> status = 'active'; } 
       
        $update->save();
        if($update->save()){
            return redirect('/adminLog')->with('success', 'Saved Successfully');
        }
 
    }
}
