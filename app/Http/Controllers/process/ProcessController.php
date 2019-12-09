<?php

namespace App\Http\Controllers\process;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        switch(auth()->user()->role_id){
            case '1':  
            return view('admin.index');
            break;

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
            return view('process.index');
            break;

            case '6':  
            return view('equip.index');
            break;

            case '7':  
            return view('vault.index');
            break;

            default: 
            return view('app.login');
            break;
        }
        return view('process.index');
    }
}
