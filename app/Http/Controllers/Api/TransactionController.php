<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use App\Box;
use App\Location;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function new(Request $request)
    {
        $input = $request->all();
        $rules = array(
            'box_id' => 'required|min:15|max:15',
            'location_id' => 'required',
            'user_id' => 'required|min:10|max:10',
            'user_weight' => 'required');

        $messages = array(
            'min' => 'Opps, that too short.',
            'max' => 'Oops, that too long.',
            'alpha_num' => 'Use alphabet or alphabet with numbers to secure your password.');


        $validator = Validator::make($input, $rules, $messages);
        if ($validator->passes()) {
            $genId="";
            try {
                DB::beginTransaction();

                //start generating reference
                $num = $input['user_id'].date('mdhiss').$input['box_id'];
                $shuffled = str_shuffle($num);
                $sfinal = substr($shuffled, 0, 10) . $num . rand();
                $genId = substr(auth()->user()->id.$sfinal, 0, 15);
                //finish generating reference

                if (auth()->user()->user_id != $input['user_id']) {
                    return response()->json(['status' => 0, 'message' => 'User ID does not exist']);
                }

                    $box = DB::table('box')->where('box_id', $input['box_id'])->get()->first();
                    if(!$box){
                        return response()->json(['status' => 0, 'message' => 'Box id is invalid']);
                    }

                    $boxu = DB::table('box')->where([['box_id','=', $input['box_id']], ['status','=', 'used']])->get()->first();
                    if($boxu){
                        return response()->json(['status' => 0, 'message' => 'Box id has been used']);
                    }

                    $location = DB::table('box')->where('location_id', $input['location_id'])->get()->first();
                    if(!$location){
                        return response()->json(['status' => 0, 'message' => 'Location id is invalid']);
                    }

                    $updateBox=DB::table('box')->where('box_id', $input['box_id'])->update(['status' => 'used']);

                $input['transaction_id'] =$genId;
                $input['date'] = date('Y-m-d');
                $input['time'] = date('H:i:s');
                $newtransaction = Transaction::create($input);

                DB::commit();
                return response()->json(['status'=> 1, 'message' => "Transaction successfully logged for processing", 'transactionid'=>$newtransaction->transaction_id]);

            } catch (\Exception $e) {
                DB::rollback();
                //dd($e);
                return response()->json(['status' => 0, 'message' => 'Error creating transaction', 'error' => $e]);
            }
        }else{
            return response()->json(['status'=> 0, 'message'=>'Error creating transaction', 'error' => $validator->errors()]);
        }

    }

    public function getDetails($transaction_id)
    {
        $tran = DB::table('transaction')->where('transaction_id', $transaction_id)->get()->first();

            if ($tran) {
                if ($tran->user_id == auth()->user()->user_id) {
                    return response()->json(['status' => 1, 'message' => 'Transactionid match found', 'data' => $tran]);
                } else {
                    return response()->json(['status' => 0, 'message' => 'The transactionid does not belong to you']);
                }
            } else {
                return response()->json(['status' => 0, 'message' => 'Transactionid does not exist']);
            }

    }


    public function history($user_id)
    {
        $tran = DB::table('transaction')->where('user_id', $user_id)->get();

        if($tran){
            if(auth()->user()->user_id == $user_id) {
                if ($tran->isEmpty()) {
                    return response()->json(['status' => 0, 'message' => 'No transaction yet']);
                } else {
                    return response()->json(['status' => 1, 'message' => 'Transaction found', 'data' => $tran]);
                }
            }else{
                return response()->json(['status' => 0, 'message' => 'Invalid user id']);
            }
        }else{
            return response()->json(['status' => 0, 'message' => 'Error while getting transaction']);
        }
    }
}
