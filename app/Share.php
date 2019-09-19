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

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public static function getTotal($network_id = null,$account = null){
        
        $count = 'undefined';

        if(!is_null($network_id) && !is_null($account)){
            $count = Share::where('network_id','=',$network_id)
                                ->where('account','=', $account)
                                ->count();
        }

        elseif( is_null($network_id) && is_null($account) ){


        }

        elseif( is_null($network_id) && !is_null($account) ){

            $count = Share::where('account','=', $account)
                                ->count();

        }

        elseif( !is_null($network_id) && is_null($account) ){

        }
    
        
        return $count;


    }

}


