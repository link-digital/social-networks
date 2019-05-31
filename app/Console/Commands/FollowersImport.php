<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Storage;
use App\Follower;


class FollowersImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'followers:import {network_id} {file_name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importa seguidores desde un archivo csv, necesita dos parametros 
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
        $file_name  = $this->argument('file_name');
        
        $fields = array('network_follower_id','name');

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
                $fields_to_save['network_id'] = $network_id;
                $fields_to_save['nickname'] = $fields_to_save['name'];

                // dd($fields_to_save);
                $follower = Follower::firstOrCreate($fields_to_save);
                // if(!Follower::where('network_follower_id',$fields_to_save['network_follower_id'])->first()){
                //     $post = Follower::create($fields_to_save);
                // }
                
            }
        }
    }
}
