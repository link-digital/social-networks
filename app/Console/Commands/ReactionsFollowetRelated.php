<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Follower;
use App\Reaction;


class ReactionsFollowetRelated extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reactions:followers {network_id} {account} {limit=10000}';

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
        
        $network_id = $this->argument('network_id');
        $account = $this->argument('account');
        $limit = $this->argument('limit');
 
        $reactions = Reaction::whereNull('follower_id')
                                ->where('network_id','=',$network_id)
                                ->where('account','=',$account)
                                ->take($limit)
                                ->get();

        foreach ($reactions as $key => $reaction) {
            $this->info('['.$key.'] Search: '. $reaction->id);
            // if($network_id = 'Facebook' && $reaction->account='FCF'){

            //     $follower = Follower::where('network_follower_id','=',$reaction->link)
            //                         ->where('account','=',$reaction->account)
            //                         ->first();
            // }else{

            //     $follower = Follower::where('network_follower_id','=',$reaction->network_follower_id)
            //                         ->where('account','=',$reaction->account)
            //                         ->first();
            // }
            $follower = Follower::where('network_follower_id','=',$reaction->network_follower_id)
                                ->where('account','=',$reaction->account)
                                ->first();
            
            if($follower){
                $this->info(' Matched: '. $follower->id);
                $reaction->follower_id = $follower->id;
                $reaction->save();
            }else{
                $this->info('No Matched');
            }
        }
    }
}
