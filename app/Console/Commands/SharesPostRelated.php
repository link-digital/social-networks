<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Share;
use App\Post;

class SharesPostRelated extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shares:post {limit = 1000}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Busca Shares sin un post relacionado y los relaciona';

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
        $shares = Share::whereNull('post_id')->take($limit)->get();

        foreach ( $shares as $key => $share ) {
            $this->info($share->id);
            $post = Post::where('network_post_id', '=', $share->network_post_id )->first();
            if($post){
                $this->info(' Post: '. $post->id );
                $share->post_id = $post->id;
                $share->save();
            }else{
                $this->info(' No post mached');
                continue;
            }
        }

    }
}
