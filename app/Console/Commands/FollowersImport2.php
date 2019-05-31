<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Storage;
use App\Follower;

class FollowersImport2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'followers2:import';

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
        $fields = array('network_follower_id','name');

        $contents = Storage::disk('local')->get('/public/FollowersFacebook2.csv');

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
                $fields_to_save['network_id'] = 'Facebook';
                $fields_to_save['nickname'] = $fields_to_save['name'];

                // dd($fields_to_save);
                if(!Follower::where('network_follower_id',$fields_to_save['network_follower_id'])->first()){
                    $post = Follower::create($fields_to_save);
                }
                
            }
        }
    }
}
