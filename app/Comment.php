<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = array('network_id','network_comment_id','network_follower_id','comment_date','post_id','follower_id','link','message','likes','comments','points');


      /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setCommentsAttribute($value)
    {
        $this->attributes['comments'] = (int)$value;
    }

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setLikesAttribute($value)
    {
        $this->attributes['likes'] = (int)$value;
    }

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public function follower()
    {
        return $this->belongsTo('App\Follower');
    }


}
