<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    protected $fillable = [
        'network_post_id',
        'network_id',
        'link',
        'follower_id',
        'post_date',
        'points'
    ];



    /**
     * Get the follower of the post.
     */
    public function follower()
    {
        return $this->hasOne('App\Follower');
    }
}


