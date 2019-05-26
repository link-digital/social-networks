<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Twitter;

class Tweet
{
 
    function __construct($id_tweet){
        $this->id_tweet = $id_tweet;
        $this->getTweetInfo();
    }   

    


    public function getTweetInfo(){

        $this->tweet = Twitter::getTweet($this->id_tweet);
        $this->getReTweets();

    }

    public function getReTweets(){
        
        $this->re_tweets = Twitter::getRts($this->id_tweet);

    }


}
