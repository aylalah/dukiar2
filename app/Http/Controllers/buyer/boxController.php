<?php

namespace App\Http\Controllers\buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use App\Role;
use App\Location;
use App\Box;

class boxController extends Controller
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
       
        $admin = Admin::orderBy('id')->select('admins.*')
                                    ->where('admins.role_id', '=', '2')
                                    ->paginate();
        $box = new Box;
        $boxs = $box::orderBy('id')                        
                                    ->select('box.*')
                                    ->paginate(8);
                                    return view('operator.box', ['data'=> $boxs, 'admi'=> $admin]);
       
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
        $addbox = new Location;
        // $word = "aztm".date('sdmy');
        // $cot= str_shuffle(substr($word, 0, 8));
        $addbox -> location_name = $request -> input('name');
        $addbox -> address = $request -> input('address');
        $addbox -> contact_no = $request -> input('contact');
        $addbox -> contact_email = $request -> input('email');
        $addbox -> admin_id = $request -> input('admin_id');
            
                $addbox->save();
                if($addbox->save()){
                    return redirect('/box')->with('success', 'Saved Successfully');
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
        $update = Location::find($id); 

        if($update -> status == 'active'){
            $update -> status = 'suspended';
        } else{ $update -> status = 'active'; } 
       
        $update->save();
        if($update->save()){
            return redirect('/box')->with('success', 'Saved Successfully');
        }
 
    }

    public function updatebox(Request $request)
    {
        $updatebox = Location::find($request-> input('id'));
        $updatebox -> location_name = $request -> input('name');
        $updatebox -> address = $request -> input('address');
        $updatebox -> contact_no = $request -> input('contact');
        $updatebox -> contact_email = $request -> input('email');
        $updatebox -> admin_id = $request -> input('admin_id');       
       
        $updatebox->save();
        if($updatebox->save()){
            return redirect('/box')->with('success', 'Saved Successfully');
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
        $delete = box::find($id);
        $delete ->delete();
       return redirect('/box');
    }
}
