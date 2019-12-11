<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Location;
use App\Admin;

class centerController extends Controller
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
            // case '1': return view('admin.index');
            // break;

            // case '2': return view('admin.index');
            // break;

            case '3': return view('admin.index');
            break;

            case '4': return view('operator.index');
            break;

            case '5': return view('vault.index');
            break;

            case '6': return view('payer.index');
            break;            

            case '7': return view('logistics.index');
            break;

            case '8': return view('process.index');
            break;

            case '9': return view('equip.index');
            break;  

            case '10': return view('lab.index');
            break; 
            
            case '11': return view('loan.index');
            break;  

            // default: return view('welcome');
            // break;
        }

        $admin = Admin::orderBy('id')->select('admins.*')
                                    // s
                                    ->paginate();
        $center = new Location;
        $centers = $center::orderBy('id')                        
                                    ->select('location.*')
                                    ->paginate(8);
                                    return view('admin.center', ['data'=> $centers, 'admi'=> $admin]);
       
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
        $addCenter = new Location;
        // $word = "aztm".date('sdmy');
        // $cot= str_shuffle(substr($word, 0, 8));
        $addCenter -> location_name = $request -> input('name');
        $addCenter -> address = $request -> input('address');
        $addCenter -> contact_no = $request -> input('contact');
        $addCenter -> contact_email = $request -> input('email');
        $addCenter -> admin_id = $request -> input('admin_id');
            
                $addCenter->save();
                if($addCenter->save()){
                    return redirect('/center')->with('success', 'Saved Successfully');
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
            return redirect('/center')->with('success', 'Saved Successfully');
        }
 
    }

    public function updatecenter(Request $request)
    {
        $updatecenter = Location::find($request-> input('id'));
        $updatecenter -> location_name = $request -> input('name');
        $updatecenter -> address = $request -> input('address');
        $updatecenter -> contact_no = $request -> input('contact');
        $updatecenter -> contact_email = $request -> input('email');
        $updatecenter -> admin_id = $request -> input('admin_id');       
       
        $updatecenter->save();
        if($updatecenter->save()){
            return redirect('/center')->with('success', 'Saved Successfully');
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
        $delete = center::find($id);
        $delete ->delete();
       return redirect('/center');
    }
}
