<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Reaction;
use App\share;

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
        
        $aguila_account = 'CervezaAguila';
        $fcf_account = 'FCF';

        $no_posts_aguila = Post::where('network_id','=',$network_id)
                                ->where('account','=', $aguila_account)
                                ->count();

        $no_posts_fcf    = Post::where('network_id','=',$network_id)
                                ->where('account','=', $fcf_account)
                                ->count();
        
        $data = (object)[
            'CervezaAguila' => [
                'no_posts' => $no_posts_aguila,
            ],

            'FCF' => [
                'no_posts' => $no_posts_fcf
            ]
        ];

        
        return view('dashboard', compact('data') );
    }
}
