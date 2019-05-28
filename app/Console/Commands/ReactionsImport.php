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
    protected $signature = 'reactions:import';

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
        $fields = array('network_post_id','link','network_follower_id','type');

        $contents = Storage::disk('local')->get('/public/ReactionsFacebook3.csv');

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
                $fields_to_save['network_id'] = 'Instagram';
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
