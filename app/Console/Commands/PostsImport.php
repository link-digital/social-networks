<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Post;
use Storage;

class PostsImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts:import';

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
        $fields = array('network_post_id', 'link','message','type','active','post_date','shares', 'comments', 'likes', 'download_likes','download_comments' );

        $contents = Storage::disk('local')->get('/public/PostTwitterFull.csv');

        $contents = explode(PHP_EOL,$contents); 

        foreach ($contents as $key => $line) {
            $this->info($key. ' ');
            if($key != 0){
                $line_contents = explode("\t", $line); 
                foreach ($fields as $index => $field) {
                    if(isset($line_contents[$index])){
                        
                        $fields_to_save[$field] = $line_contents[$index]; 
                    }else{
                        $this->info('finish');
                    }
                }
                $fields_to_save['network_id'] = 'Twitter';
                $post = Post::create( $fields_to_save);
            }
        }
    }
}
