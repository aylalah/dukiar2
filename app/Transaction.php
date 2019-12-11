<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table= 'transaction';
    protected $fillable = [
        'user_id','box_id','transaction_id','gps_location','status','user_weight','xrf_value','karate','t_date','t_time','cost','payer1_status','payer2_status','payer3_status'
    ];  
    

}
