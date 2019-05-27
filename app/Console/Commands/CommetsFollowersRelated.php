<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Comment;
use App\Post;


class CommetsFollowersRelated extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comments:followers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $comments = Comment::whereNull('post_id')->take(1000)->get();

        foreach ( $comments as $key => $comment ) {
            $this->info($comment->id);
            $post = Post::where('network_post_id', '=', $comment->network_post_id )->where('network_id', '=', $comment->network_id)->first();
            if($post){
                $this->info(' Post: '. $post->id );
                $comment->post_id = $post->id;
                $follower = Follower::where('network_follower_id', '=', $comment->network_follower_id )->where('network_id', '=', $comment->network_id)->first();
                if($follower){
                    $this->info('  Follower: '. $follower->id );
                    $comment->follower_id = $follower->id;
                    $comment->save();
                }
                
            }else{
                $this->info(' No post mach');
                continue;
            }
        }
    }
}
