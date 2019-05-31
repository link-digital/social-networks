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
    protected $signature = 'comments:import {network_id} {file_name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importa commentarios desde un archivo csv, necesita dos parametros 
    {network_id} = "Facebook" 
    {file_name}  = "file.csv" ';

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
        $file_name = $this->argument('file_name');
        print $network_id;
        print $file_name;
        
        $fields = array('network_comment_id','comment_date','network_follower_id','name','message','likes','comments','link');

        $contents = Storage::disk('local')->get('/public/'.$file_name);
        
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
                $fields_to_save['network_id'] = $network_id;
                try {
                    $post = Comment::create($fields_to_save);
                } catch (\Exception $e) {
                    $this->info('Process line error '. $key. ' '. $e->getMessage());
                    Storage::disk('local')->append('/public/file.log', json_encode($fields_to_save)."\n");
                }
                
            }
        }
    }
}
