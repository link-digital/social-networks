<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Follower;
use App\Result;

use Illuminate\Support\Facades\DB;

class CalculatePoints extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:points {network_id} {account} {limit=1000}';

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
        $account    = $this->argument('account');
        $limit    = $this->argument('limit');

        $followers = Follower::whereNull('calculated')
                                ->take($limit)
                                ->where('network_id','=',$network_id)
                                ->where('account','=',$account)
                                ->get();
        
        foreach ($followers as $key => $follower) {
            $this->line('Calculating : '. $follower->id);
            $total_points_comments = 0;
            $total_points_reactions = 0;
            $total_points_shares = 0;
            $total_points_followers = $follower->points;
            $grant_total = 0;

            foreach ($follower->getComments($network_id, $account) as $key => $comment) {
                $total_points_comments  += $comment->points_total;
            }
            foreach ($follower->getReactions($network_id, $account) as $key => $reaction) {
                $total_points_reactions += $reaction->points;
            }
            foreach ($follower->getShares($network_id, $account) as $key => $share) {
                $total_points_shares += $share->points;
            }
            
            $grant_total = array_sum([$total_points_comments, $total_points_reactions , $total_points_shares , $total_points_followers]);
            
            $result_to_save = [
                'follower_id' => $follower->id,
            ];

            $result = Result::firstOrCreate($result_to_save);
            $result->comments_points = $total_points_comments;
            $result->share_points = $total_points_shares;
            $result->reactions_points = $total_points_reactions;
            $result->follower_points = $total_points_followers;
            $result->grant_total = $grant_total;
            $result->save();

            $this->line('Grant Total: ' . $grant_total);
        }

        $this->info('Finish');
    }
}
