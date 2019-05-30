<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    //

    protected $fillable = array('network_follower_id','network_id','name','link','nickname');



    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function getComments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function getReactions()
    {
        return $this->hasMany('App\Reaction');
    }

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function getShares()
    {
        return $this->hasMany('App\Share');
    }
}
