<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tweet;
use App\Comment;
use App\Follower;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Storage;
use PHPHtmlParser\Dom;
 

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        $posts = Post::paginate(15);
        return view('posts.index', compact('posts'));
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexNetwork($network)
    {
        $count = Post::where('network_id', '=', $network)->count();
        $posts = Post::where('network_id', '=', $network)->paginate(15);
        return view('posts.index', compact('posts', 'count'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        sleep(1);
        
        // $this->validate(request(), [
        //   'message' => 'required|min:5',
        // ]);

        $post = Post::create( request()->all() );

        $results            = [];
        $results['client']  = $post;
        $results['status']  = 'success';
        $results['message'] = __('Cliente creado');

        return $results;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact($post));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    /**
     * import file csv 
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function import()
    {
        
        
    }

    /**
     * import file csv 
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function tweet($id)
    {
        
        $tweet = new Tweet($id);
        dd($tweet);

    }

    /**
     * import file csv 
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function parseComments(Post $post)
    {   
        
        $post->parseComments();
        
    }


}
