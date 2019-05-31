<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Reaction;
use Storage;

class ReactionsPoints extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reactions:points {limit=10000}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Da un valor en puntos a cada reaccion';

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
        
        $reactions = Reaction::whereNull('points')->take($limit)->get();
        $conditions = [
            'LIKE' => 2,
            'ANGRY' => -5,
            'HAHA' => 2,
            'LOVE' => 5,
            'SAD' => 0,
            'WOW' => 2,
        ];

        foreach ($reactions as $key => $reaction) {
            $this->info($reaction->id);
            $points = ( isset($conditions[$reaction->type]) ) ? $conditions[$reaction->type]:0;
            $reaction->points = $points;
            $reaction->save();
        }
    }
}
