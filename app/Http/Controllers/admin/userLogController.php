<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;

class userLogController extends Controller
{
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

        $alluser = User::count();
        $actuser = User::where('status','=','active')->count();
        $sususer = User::where('status','=','suspended')->count();
        $newuser = User::where('status','=','new')->count();

        $user = new User;
        $users = $user::orderBy('id')
                                     ->select('users.*')
                                    ->paginate();
                                    return view('admin.userLog', ['data'=> $users, 'count1'=> $alluser, 'count2'=> $actuser, 'count3'=> $sususer, 'count4'=> $newuser]);
                                     
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
        $alluser = User::count();
        $actuser = User::where('status','=','active')->count();
        $sususer = User::where('status','=','suspended')->count();
        $newuser = User::where('status','=','new')->count();

        $user = new User;
        $users = $user::orderBy('id')
                                     ->select('users.*')
                                     ->where('users.id', '=', $id)
                                    ->paginate();
                                    return view('admin.viewuser', ['data'=> $users, 'count1'=> $alluser, 'count2'=> $actuser, 'count3'=> $sususer, 'count4'=> $newuser]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $user = User::find($id);
        // $role = Role::all();
        // $cat = Category::all();
        // return view('users.edit-People')-> with('data', $editpresenter)->with('dat', $role)->with('cdata', $cat);
 
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
        $update = User::find($id); 

        if($update -> status == 'active'){
            $update -> status = 'suspended';
        } else{ $update -> status = 'active'; } 
       
        $update->save();
        if($update->save()){
            return redirect('/userLog')->with('success', 'Saved Successfully');
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
        $delete = User::find($id);
        $delete ->delete();
       return redirect('/userLog');
    }
}
