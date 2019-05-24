<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    protected $fillable = [
        'network_post_id',
        'network_id',
        'post_id',
        'network_follower_id',
        'follower_id',
        'type',
        'link',
        'points',
    ];
}
