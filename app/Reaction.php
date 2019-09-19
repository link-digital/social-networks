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
        'account'
    ];


    public static function getTotalKeyWords($network_id = null,$account = null){
        
        $count['like'] = 0; 
        $count['haha'] = 0;
        $count['love'] = 0;
        $count['sad'] = 0; 
        $count['angry'] = 0;
        $count['wow'] = 0; 


        if(!is_null($network_id) && !is_null($account)){
            $count['like'] = Reaction::where('network_id','=',$network_id)
                                ->where('account','=', $account)
                                ->where('type', '=','Like')
                                ->count();
            $count['haha'] = Reaction::where('network_id','=',$network_id)
                                ->where('account','=', $account)
                                ->where('type', '=','Haha')
                                ->count();
            $count['love'] = Reaction::where('network_id','=',$network_id)
                                ->where('account','=', $account)
                                ->where('type', '=','Love')
                                ->count();
            $count['sad'] = Reaction::where('network_id','=',$network_id)
                                ->where('account','=', $account)
                                ->where('type', '=','Sad')
                                ->count();
            $count['angry'] = Reaction::where('network_id','=',$network_id)
                                ->where('account','=', $account)
                                ->where('type', '=','Angry')
                                ->count();
            $count['wow'] = Reaction::where('network_id','=',$network_id)
                                ->where('account','=', $account)
                                ->where('type', '=','Wow')
                                ->count();
        }

        elseif( is_null($network_id) && is_null($account) ){


        }

        elseif( is_null($network_id) && !is_null($account) ){

            $count = Reaction::where('account','=', $account)
                                ->count();

        }

        elseif( !is_null($network_id) && is_null($account) ){

        }
    
        
        return $count;


    }
}
