<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DukiaClub extends Model
{
    protected  $table ='dukia_club';

    protected $fillable = [
        'user_id', 'accumulated_point_id',
    ];
}
