<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table= 'location';
    
    protected $fillable = [
        'location_name','address','contact_no','contact_email','admin_id','status'
    ];  
}
