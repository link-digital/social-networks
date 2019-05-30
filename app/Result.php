<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'follower_id',
        'comments_points',
        'share_points',
        'reactions_points',
        'follower_points',
        'grant_total'
    ];


    /**
     * Get the follower of the post.
     */
    public function follower()
    {
        return $this->belongsTo('App\Follower');
    }
}
