<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Comment;


class CommentsPoints extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comments:points';

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
        $comments = Comment::all();
        $key_words = array(
            'TE AMO SELECCIÓN',
            'MÁS UNIDOS QUE NUNCA',
            'MI SELE',
            'LA SELE',
            'CRACKS',
            'GRANDES',
            'QUÉ CHIMBA MI SELECCIÓN',
            'ORGULLO SELECCIÓN',
            'GRACIAS COLOMBIA',
            'ME ENCANTA LA SELECCIÓN',
            'VIVA OSPINA',
            'VIVA JAMES',
            'VIVA FALCAO',
            'LOS MAS GRANDES',
            'LOS MEJORES',
            'ALEGRÍA JUEGA LA SELECCIÓN',
            'SIEMPRE UNIDOS',
            'SIEMPRE ALENTANDO'
            );

        $unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                        'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                        'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                        'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                        'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );

        foreach($comments as $key => $comment){
            $this->info($comment->id);
            $points = 2;
            $points_likes = $comment->likes;
            $points_comments = $comment->comments * 2;
            $points_keywords = 0;
            $message = $str = strtr( $comment->message, $unwanted_array );
            foreach ($key_words as $index => $keyword) {
                $keyword = $str = strtr( $keyword, $unwanted_array );
                if( strpos(strtolower($message), strtolower($keyword) )  === false ){ 
          
                }else{
                    $points_keywords += 5;
               }
            }
            $comment->points_likes = $points_likes;
            $comment->points_comments = $points_comments;
            $comment->points_keywords = $points_keywords;
            $comment->points = $points;
            $comment->points_total = array_sum([$points,$points_likes,$points_comments,$points_keywords]);
            $comment->save();
        }
        
    }
}
