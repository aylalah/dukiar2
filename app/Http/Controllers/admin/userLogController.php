<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

        $user = new User;
        $users = $user::orderBy('id')->join('role', 'users.role','=','role.id')                                    
                                    ->select('users.*','role.role_name')
                                    ->paginate(8);
                                     return view('admin.userLog')->with('data', $users);
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
