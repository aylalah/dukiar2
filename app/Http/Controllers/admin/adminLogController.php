<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\Admin;
use App\Role;
use App\Location;

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
        switch(auth()->user()->role_id){
            // case '1': return view('admin.index');
            // break;

            // case '2': return view('admin.index');
            // break;

            // case '3': return view('admin.index');
            // break;

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

        $roles = Role::all();
        $locations = Location::all();

        $admin = new Admin;
        $admins = $admin::orderBy('id')->join('role', 'admins.role_id','=','role.id')
                                    ->join('location', 'admins.location_id','=','location.id')                                    
                                    ->select('admins.*','role.role_name', 'location.location_name')
                                    ->paginate();
                                    return view('admin.adminLog', ['data'=> $admins, 'role'=> $roles, 'location'=> $locations]);
       
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
        $email= $request -> input('email');
        $addRole = new Admin;
        $word = "aztm".date('sdmy');
        $cot= str_shuffle(substr($word, 0, 8));
        $addRole -> role_id = $request -> input('role_id');
        $addRole -> location_id = $request -> input('location');
        $addRole -> email = $request -> input('email');
        $addRole -> password = Hash::make($cot);  
        
        $GLOBALS['email']=$request -> input('email');
        
        $data = array('cu'=>"hello", 'site'=>'hi', 'recipient'=>'jo','order'=>'yii','price'=>'allo');
        Mail::send('password', $data, function($message) {
           $message->to($GLOBALS['email'], 'new user')->subject('New account created for u');
           $message->from('ayoade0369@gmail.com','noreply');
        });

                $addRole->save();
                if($addRole->save()){                    

                    //  echo $cot;
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
        $updateadmin -> location_id = $request -> input('location');        
       
        $updateadmin->save();
        if($updateadmin->save()){

            // $data= array('data1'=> 'response 1 and so on', 'data2'=>"respons");
            // Mail::send('mail', $data, function($message){
            //     $message->to($request-> input('email'), "name")->subject("this is the subject");
            //     $message->from('seder@testmail.com','no reply');
            // } );
            
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
