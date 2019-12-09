<?php

namespace App\Http\Controllers\buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use App\Role;
use App\Location;

class transactionController extends Controller
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

            // case '2':  
            // return view('operator.index');
            // break;

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
       
        $admin = Admin::orderBy('id')->select('admins.*')
                                    ->where('admins.role_id', '=', '2')
                                    ->paginate();
        $transaction = new Location;
        $transactions = $transaction::orderBy('id')                        
                                    ->select('location.*')
                                    ->paginate(8);
                                    return view('operator.transaction', ['data'=> $transactions, 'admi'=> $admin]);
       
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
        $addtransaction = new Location;
        // $word = "aztm".date('sdmy');
        // $cot= str_shuffle(substr($word, 0, 8));
        $addtransaction -> location_name = $request -> input('name');
        $addtransaction -> address = $request -> input('address');
        $addtransaction -> contact_no = $request -> input('contact');
        $addtransaction -> contact_email = $request -> input('email');
        $addtransaction -> admin_id = $request -> input('admin_id');
            
                $addtransaction->save();
                if($addtransaction->save()){
                    return redirect('/transaction')->with('success', 'Saved Successfully');
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
            return redirect('/transaction')->with('success', 'Saved Successfully');
        }
 
    }

    public function updatetransaction(Request $request)
    {
        $updatetransaction = Location::find($request-> input('id'));
        $updatetransaction -> location_name = $request -> input('name');
        $updatetransaction -> address = $request -> input('address');
        $updatetransaction -> contact_no = $request -> input('contact');
        $updatetransaction -> contact_email = $request -> input('email');
        $updatetransaction -> admin_id = $request -> input('admin_id');       
       
        $updatetransaction->save();
        if($updatetransaction->save()){
            return redirect('/transaction')->with('success', 'Saved Successfully');
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
        $delete = transaction::find($id);
        $delete ->delete();
       return redirect('/transaction');
    }
}
