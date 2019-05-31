<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Reaction;
use App\Post;
use App\Follower;


class ReactionsPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reactions:post {limit = 1000}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'busca reacciones que no tengan un post relacionado y los relaciona';

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
        $limit = $this->argument('limit');
        $reactions = Reaction::whereNull('post_id')->take($limit)->get();

        foreach ( $reactions as $key => $reaction ) {
            $this->info($reaction->id);
            $post = Post::where('network_post_id', '=', $reaction->network_post_id )->where('network_id', '=', $reaction->network_id)->first();
            if($post){
                $this->info(' Post: '. $post->id );
                $reaction->post_id = $post->id;
                $follower = Follower::where('network_follower_id', '=', $reaction->network_follower_id )->where('network_id', '=', $reaction->network_id)->first();
                if($follower){
                    $this->info('  Follower: '. $follower->id );
                    $reaction->follower_id = $follower->id;
                    $reaction->save();
                }
                
                
            }else{
                $this->info(' No post mached');
                continue;
            }
        }
    }
}
