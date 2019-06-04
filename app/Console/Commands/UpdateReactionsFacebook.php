<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Reaction;

class UpdateReactionsFacebook extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:reactions {limit=10000}';

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
        $limit = $this->argument('limit');
        $reactions = Reaction::where('network_id','=','Facebook')->where('account','=','FCF')->take($limit)->get();
        foreach ($reactions as $key => $reaction) {
            $this->line($reaction->id);
            $reaction->network_follower_id = $reaction->link;
            $reaction->save;
        }
    }
}
