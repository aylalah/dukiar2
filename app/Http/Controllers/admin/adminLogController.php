<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Admin;
use App\Role;

class adminLogController extends Controller
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
        $admin = new Admin;
        $admins = $admin::orderBy('id')->join('role', 'admins.role_id','=','role.id')                                    
                                    ->select('admins.*','role.role_name')
                                    ->paginate(8);
                                    return view('admin.adminLog')->with('data', $admins);
       
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
        $addRole = new Admin;
        $word = "aztm".date('sdmy');
        $cot= str_shuffle(substr($word, 0, 8));
        $addRole -> role_id = $request -> input('role_id');
        $addRole -> email = $request -> input('email');
        $addRole -> password = $cot;
            
                $addRole->save();
                if($addRole->save()){
                    return redirect('/adminLog')->with('success', 'Saved Successfully');
                }
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
        $update = Admin::find($id); 

        if($update -> status == 'active'){
            $update -> status = 'suspended';
        } else{ $update -> status = 'active'; } 
       
        $update->save();
        if($update->save()){
            return redirect('/adminLog')->with('success', 'Saved Successfully');
        }
 
    }

    public function updateadmin(Request $request)
    {
        $updateadmin = Admin::find($request-> input('id'));
        $updateadmin -> name = $request-> input('name');
        $updateadmin -> email = $request-> input('email');
        $updateadmin -> role_id = $request -> input('role_id');        
       
        $updateadmin->save();
        if($updateadmin->save()){
            $data= array('data1'=> 'response 1 and so on');
            Mail::send('mail', $data, function($message){
                $message->to($request-> input('email'), "name")->subject("this is the subject");
                $message->from('seder@testmail.com','no reply');
            } );
            return redirect('/adminLog')->with('success', 'Saved Successfully');
        }
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Admin::find($id);
        $delete ->delete();
       return redirect('/adminLog');
    }
}
