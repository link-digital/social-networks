<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Comment;
use Storage;

class CommentsImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comments:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importar Comentarios';

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
        $fields = array('network_comment_id','comment_date','network_follower_id','name','message','likes','comments','link');

        $contents = Storage::disk('local')->get('/public/CommentsFacebook.csv');

        $contents = explode(PHP_EOL,$contents); 

        foreach ($contents as $key => $line) {
            if($key != 0){
                $this->info('Process line '. $key);
                $line_contents = explode("\t", $line);
                foreach ($fields as $index => $field) {
                    if(isset($line_contents[$index])){
                        $fields_to_save[$field] = $line_contents[$index]; 
                    }else{
                        $this->info('finish');
                    }
                }
                $fields_to_save['network_id'] = 'Facebook';
                try {
                    $post = Comment::create($fields_to_save);
                } catch (\Exception $e) {
                    $this->info('Process line error '. $key);
                    Storage::disk('local')->append('/public/file.log', json_encode($fields_to_save)."\n");
                }
                
            }
        }
    }
}
