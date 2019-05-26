<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Post;

class PostsShares extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts:shares';

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
        $posts = Post::whereNull('get_shares')->where('network_id', '=', 'Twitter')->take(500)->get();
        foreach($posts as $key => $post){
            $this->info($post->id);
            $result = $post->getShares();
            $this->info(' '. $result);
            if($result == '[88] Rate limit exceeded'){
                exit;
            }elseif( $result === true ){
                $post->get_shares = 1;
                $post->save();
            }else{
                continue;
            }
            

        }
    }
}
