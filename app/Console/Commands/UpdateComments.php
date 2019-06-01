<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Post;
use Storage;


class UpdateComments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comments:update {file_name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Actualiza el estado de los comentarios';

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
        $file_name  = $this->argument('file_name');
        
        $fields = array('network_post_id','active');

        $contents = Storage::disk('local')->get('/public/'.$file_name);

        $contents = explode(PHP_EOL,$contents); 

        foreach ($contents as $key => $line) {
            $this->info('Process line'. $key);
            if($key != 0){
                $line_contents = explode("\t", $line);
                foreach ($fields as $index => $field) {
                    if(isset($line_contents[$index])){
                        $fields_to_save[$field] = $line_contents[$index]; 
                    }else{
                        return 'finish';
                    }
                }
                
         
                $post = Post::where('network_post_id','=',$fields_to_save['network_post_id'])->first();
                
                if($post){
                    
                    $post->active = str_replace("\r",'',$fields_to_save['active']);
                    $post->save();
                }
              
            }
        }
    }
    
}
