<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Follower;
use Illuminate\Http\Request;
use Storage;
use App\Result;


class FollowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $followers = Follower::paginate(15);
        
        return view('followers.index', compact('followers'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexNetwork($network)
    {
        $count = Follower::where('network_id', '=', $network)->count();

        $followers = Follower::where('network_id', '=', $network)->paginate(15);
        
        return view('followers.index', compact('followers','count'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('followers.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Follower  $follower
     * @return \Illuminate\Http\Response
     */
    public function show(Follower $follower)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Follower  $follower
     * @return \Illuminate\Http\Response
     */
    public function edit(Follower $follower)
    
    {
        
                       
        return view('followers.edit', compact('follower'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Follower  $follower
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Follower $follower)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Follower  $follower
     * @return \Illuminate\Http\Response
     */
    public function destroy(Follower $follower)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Follower  $follower
     * @return \Illuminate\Http\Response
     */
    public function ranking($network_id = null, $account = null)
    {
        
        // $results = Result::orderBy('grant_total', 'DESC')->paginate(10);
        $results = DB::table('results')
                        ->select('followers.name','results.*')
                        ->join('followers','followers.id','results.follower_id')
                        ->where('followers.account','=',$account)
                        ->where('followers.network_id','=',$network_id)
                        ->orderBy('results.grant_total', 'DESC')
                        ->paginate(10);
        $rank = $results->firstItem();
        

        return view('followers.ranking',compact('results','network_id','account','rank'));
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Follower  $follower
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        
        return view('followers.dashboard');
    }


}
