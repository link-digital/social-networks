<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Reaction;
use App\Share;
use App\Follower;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard($network_id)
    {
        
        // $aguila_account = 'CervezaAguila';
        // $fcf_account = 'FCF';

        // $no_posts_aguila = Post::where('network_id','=',$network_id)
        //                         ->where('account','=', $aguila_account)
        //                         ->count();

        // $no_posts_fcf    = Post::where('network_id','=',$network_id)
        //                         ->where('account','=', $fcf_account)
        //                         ->count();


        $no_posts_aguila = Post::getTotal($network_id,'CervezaAguila');
        $no_posts_fcf    = Post::getTotal($network_id,'FCF');

        $no_followers_aguila = Follower::getTotal($network_id,'CervezaAguila');
        $no_followers_fcf    = Follower::getTotal($network_id,'FCF');

        $no_comments_aguila = Comment::getTotal($network_id,'CervezaAguila');
        $no_comments_fcf    = Comment::getTotal($network_id,'FCF');


        $no_comments_over_comments_aguila = Comment::getTotalComments($network_id,'CervezaAguila');
        $no_comments_over_comments_fcf = Comment::getTotalComments($network_id,'FCF');

        $no_reactions_over_comments_aguila = Comment::getTotalReactions($network_id,'CervezaAguila');
        $no_reactions_over_comments_fcf = Comment::getTotalReactions($network_id,'FCF');
        
        $no_keywords_aguila = Comment::getTotalKeyWords($network_id,'CervezaAguila');
        $no_keywords_fcf    = Comment::getTotalKeyWords($network_id,'FCF');

        $no_reactions_aguila = Reaction::getTotalKeyWords($network_id,'CervezaAguila');
        $no_reactions_fcf    = Reaction::getTotalKeyWords($network_id,'FCF');

        $no_reactions_over_post_aguila  = Post::getTotalReactions($network_id,'CervezaAguila');
        $no_reactions_over_post_fcf     = Post::getTotalReactions($network_id,'FCF'); 

        $no_actives_aguila = Post::getTotalActives($network_id,'CervezaAguila');
        $no_actives_fcf = Post::getTotalActives($network_id,'FCF');

        $no_shares_aguila = Share::getTotal($network_id,'CervezaAguila');
        $no_shares_fcf = Share::getTotal($network_id,'FCF');

        // $no_likes_over_commets_aguila = Comment::getTotalLikes($network_id,'CervezaAguila');
        // $no_likes_over_commets_fcf    = Comment::getTotalLikes($network_id,'FCF');

        $data = (object)[
            'CervezaAguila' => [
                'no_posts'  => $no_posts_aguila,
                'no_post_seleccion' => $no_actives_aguila,
                'reactions_over_posts' => $no_reactions_over_post_aguila,
                'user_interactions' => $no_followers_aguila,
                'shares'    => $no_shares_aguila,
                'comments'  => $no_comments_aguila,
                'keywords'  => $no_keywords_aguila,
                'reactions' => $no_reactions_aguila,
                'comments_over_comments' => $no_comments_over_comments_aguila,
                'reactions_over_comments' => $no_reactions_over_comments_aguila,
                // 'likes_over_comments' => $no_likes_over_commets_aguila,
            ],

            'FCF' => [
                'no_posts'  => $no_posts_fcf,
                'no_post_seleccion' => $no_actives_fcf,
                'reactions_over_posts' => $no_reactions_over_post_fcf,
                'user_interactions' => $no_followers_fcf,
                'shares'    => $no_shares_fcf,
                'comments'  => $no_comments_fcf,
                'keywords'  => $no_keywords_fcf,
                'reactions' => $no_reactions_fcf,
                'comments_over_comments' => $no_comments_over_comments_fcf,
                'reactions_over_comments' => $no_reactions_over_comments_fcf,
                // 'likes_over_comments' => $no_likes_over_commets_fcf,
            ]
        ];

        
        return view('dashboard', compact('data','network_id') );
    }
}
