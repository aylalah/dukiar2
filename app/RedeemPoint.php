<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RedeemPoint extends Model
{
    protected  $table ='redeem_point';

    protected $fillable = [
        'user_id',
    ];
}
