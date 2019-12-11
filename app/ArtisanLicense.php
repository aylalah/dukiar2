<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtisanLicense extends Model
{


    protected  $table ='artisanlicense';

    protected $fillable = [
        'first_name',
'middle_name',
'number',
'name',
'address',
'email',
'phoneno1',
'phoneno2',
'phoneno3',
'phoneno4',
    ];
}
