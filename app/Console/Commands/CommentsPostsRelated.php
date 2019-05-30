<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Comment;
use App\Post;


class CommentsPostsRelated extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comments:posts {network_id}';

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
        $network_id = $this->argument('network_id');

        $comments = Comment::where('network_id','=',$network_id)->whereNull('post_id')->limit(1000)->get();

        if($comments){

            foreach ($comments as $key => $comment) {
                
                switch ($network_id) {
                    case 'Facebook':
                        $post_id = explode('_',$comment->network_comment_id)[0];
                        $this->info('Found: '. $post_id);
                        break;
                    
                    default:
                        $this->info('Argument network_id not is valid');
                        exit;
                        break;
                }

                $post = Post::where('network_post_id','like','%'.$post_id.'%')->first();
                if( $post ){
                    $comment->post_id = $post->id;
                    $comment->save();
                }else{
                    $this->info('Post not found');
                    continue;
                }
           
            }

        }else{
            $this->info('Not Found');
        }

    }
}
