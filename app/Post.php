<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $primaryKey = 'id';

    protected $fillable = array('network_post_id', 'network_id','link','message','type','post_date','active','shares','likes','comments','download_likes','download_comments' );



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

}
