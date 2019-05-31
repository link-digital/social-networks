<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Follower;
use App\Share;
use App\Tweet;
use App\Comment;

use PHPHtmlParser\Dom;




class Post extends Model
{

    protected $primaryKey = 'id';

    protected $fillable = array('network_post_id','account', 'network_id','link','message','type','post_date','active','shares','likes','comments','download_likes','download_comments' );



    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setDownloadLikesAttribute($value)
    {
        $this->attributes['download_likes'] = ($value == 'SI') ? 1:0;
    }

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setDownloadCommentsAttribute($value)
    {
        $this->attributes['download_comments'] = ($value == 'SI') ? 1:0;
    }

     /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setActiveAttribute($value)
    {
        $this->attributes['active'] = ($value == 'SI') ? 1:0;
    }

      /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setSharesAttribute($value)
    {
        $this->attributes['shares'] = (int)$value;
    }

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
    public function getComments()
    {
        return $this->belongsTo('App\Comment','id','post_id');
    }





    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function getShares()
    {

        try {
            $tweet = new Tweet($this->network_post_id);
        
            foreach ($tweet->re_tweets as $key => $retweet) {
                $follower = $retweet->user;
                $findOrCreate = [
                    'network_follower_id' => $follower->id,
                    'network_id' => 'Twitter',
                    'name' => $follower->name,
                    'link' => 'https://twitter.com/'.$follower->screen_name,
                    'nickname' => $follower->screen_name
                ];
                
                $follower = Follower::firstOrCreate($findOrCreate);

                $findOrCreate = [
                    'network_post_id' => $tweet->id_tweet,
                    'network_id' => 'Twitter',
                    'follower_id' => $follower->id,
                    'post_date' => date("Y-m-d h:m:s", strtotime($retweet->created_at)),
                    'account'   => $this->account
                ];
                $share = Share::firstOrCreate($findOrCreate);
            }

        } catch (\Exception $e) {
           return $e->getMessage();
        }
        
        return true;
    }


     /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function parseComments(){

        try {
            $dom = new Dom;
            $dom->loadFromUrl($this->link);
            
            $ThreadedConversation = $dom->find('#descendants li.ThreadedConversation' );
            $ThreadedConversationLone = $dom->find('#descendants li.ThreadedConversation--loneTweet' );
            
            $ThreadedConversationReplies = [];
            $ThreadedConversationLoneReplies = [];
            
            foreach ($ThreadedConversation as $content) {
                $comment_id = $content->find('li')->getAttribute('data-item-id');
                $tweet = new Tweet($comment_id, false);
                
                $findOrCreate = [
                    'network_follower_id' => $tweet->tweet->user->id,
                    'network_id' => 'Twitter',
                    'name' => $tweet->tweet->user->name,
                    'link' => 'https://twitter.com/'.$tweet->tweet->user->screen_name,
                    'nickname' => $tweet->tweet->user->screen_name
                ];
                
                $follower = Follower::firstOrCreate($findOrCreate);
                $commentfindOrCreate = [
                    'network_id' => 'Twitter',
                    'network_comment_id' => $tweet->id_tweet,
                    'network_follower_id' => $follower->id,
                    'comment_date' => date("Y-m-d h:m:s", strtotime($tweet->tweet->created_at)),
                    'post_id' => $this->id,
                    'follower_id' => $follower->id,
                    'link' => 'https://twitter.com/'.$follower->nickname.'/status/'.$tweet->id_tweet,
                    'message' => $tweet->tweet->text,
                    'likes' => NULL,
                    'comments' => NULL,
                    'points' => NULL
                ];
                $commentfindOrCreate = Comment::firstOrCreate($commentfindOrCreate);
                $this->get_parse = 1;
                $this->save();
            }
    
            foreach ($ThreadedConversationLone as $content)
                {
                    $comment_id = $content->find('li')->getAttribute('data-item-id');
                $tweet = new Tweet($comment_id, false);
                
                $findOrCreate = [
                    'network_follower_id' => $tweet->tweet->user->id,
                    'network_id' => 'Twitter',
                    'name' => $tweet->tweet->user->name,
                    'link' => 'https://twitter.com/'.$tweet->tweet->user->screen_name,
                    'nickname' => $tweet->tweet->user->screen_name
                ];
                
                $follower = Follower::firstOrCreate($findOrCreate);
                $commentfindOrCreate = [
                    'network_id' => 'Twitter',
                    'network_comment_id' => $tweet->id_tweet,
                    'network_follower_id' => $follower->id,
                    'comment_date' => date("Y-m-d h:m:s", strtotime($tweet->tweet->created_at)),
                    'post_id' => $this->id,
                    'follower_id' => $follower->id,
                    'link' => 'https://twitter.com/'.$follower->nickname.'/status/'.$tweet->id_tweet,
                    'message' => $tweet->tweet->text,
                    'likes' => NULL,
                    'comments' => NULL,
                    'points' => NULL
                ];
                $commentfindOrCreate = Comment::firstOrCreate($commentfindOrCreate);
                $this->get_parse = 1;
                $this->save();
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return true;
       
    }

}
