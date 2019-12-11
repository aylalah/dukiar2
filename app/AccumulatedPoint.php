<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccumulatedPoint extends Model
{
    protected  $table ='accumulated_point';

    protected $fillable = [
        'user_id',
    ];
}
