<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    protected $table= 'box';
    
    protected $fillable = [
        'box_id','location_id','description','status','created_at','updated_at'
    ]; 
}
