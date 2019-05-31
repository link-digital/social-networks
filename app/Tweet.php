<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Twitter;

class Tweet
{
 
    function __construct($id_tweet, $reTweets = true){
        $this->id_tweet = $id_tweet;
        $this->reTweets = $reTweets;
        $this->getTweetInfo();
    }   

    


    public function getTweetInfo(){

        $this->tweet = Twitter::getTweet($this->id_tweet);
        if($this->reTweets)
            // $this->getReTweets();

    }

    public function getReTweets(){
        
        $this->re_tweets = Twitter::getRts($this->id_tweet);

    }


}
