<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    //

    protected $fillable = array('network_follower_id','network_id','name','link','nickname');
}
