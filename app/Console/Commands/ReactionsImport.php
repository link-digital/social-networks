<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Reaction;
use Storage;

class ReactionsImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reactions:import {network_id} {account} {file_name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importa reacciones desde un archivo csv';

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
        $account = $this->argument('account');
        $file_name  = $this->argument('file_name');
     
        $fields = array('network_post_id','link','network_follower_id','type');

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
                $fields_to_save['link'] = NULL;
                $fields_to_save['network_id'] = $network_id;
                $fields_to_save['account'] = $account;
                try {
                    $post = Reaction::create($fields_to_save);
                } catch (\Exception $e) {
                    $this->info('Process line error '. $key);
                    Storage::disk('local')->append('/public/file_reactions.log', json_encode($fields_to_save)."\n");
                }
                
            }
        }
    }
}
