<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    //

    protected $fillable = array('network_follower_id','network_id','name','link','nickname', 'account');



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


     /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public static function getTotal($network_id = null,$account = null){
        
        $count = 'undefined';

        if(!is_null($network_id) && !is_null($account)){
            $count = Follower::where('network_id','=',$network_id)
                                ->where('account','=', $account)
                                ->count();
        }

        elseif( is_null($network_id) && is_null($account) ){


        }

        elseif( is_null($network_id) && !is_null($account) ){

        }

        elseif( !is_null($network_id) && is_null($account) ){

        }
    
        
        return $count;


    }

}


