<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = array('network_id','network_comment_id','network_follower_id','comment_date','post_id','follower_id','link','message','likes','comments','points', 'account');


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

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
        public function follower()
    {
        return $this->belongsTo('App\Follower');
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
            $count = Comment::where('network_id','=',$network_id)
                                ->where('account','=', $account)
                                ->count();
        }

        elseif( is_null($network_id) && is_null($account) ){


        }

        elseif( is_null($network_id) && !is_null($account) ){
            $count = Comment::where('account','=', $account)
                                ->count();
        }

        elseif( !is_null($network_id) && is_null($account) ){

        }
    
        
        return $count;


    }

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */

    public static function getTotalComments($network_id = null,$account = null){
        
        $count = 'undefined';

        if(!is_null($network_id) && !is_null($account)){
            $count = Comment::where('network_id','=',$network_id)
                                ->where('account','=', $account)
                                ->where('comments','<>', 0)
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


    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */

    public static function getTotalReactions($network_id = null,$account = null){
        
        $count = 'undefined';

        if(!is_null($network_id) && !is_null($account)){
            $count = Comment::where('network_id','=',$network_id)
                                ->where('account','=', $account)
                                ->where('likes','<>', 0)
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

        /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public static function getTotalKeyWords($network_id = null,$account = null){
        
        $count = 'undefined';

        if(!is_null($network_id) && !is_null($account)){
            $count = Comment::where('network_id','=',$network_id)
                                ->where('account','=', $account)
                                ->where('points_keywords', '<>',0)
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

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public static function getTotalLikes($network_id = null,$account = null){
        
        $count = 'undefined';

        if(!is_null($network_id) && !is_null($account)){
            $count = Comment::where('network_id','=',$network_id)
                                ->where('account','=', $account)
                                ->where('likes', '<>',0)
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
