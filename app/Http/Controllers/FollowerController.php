<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Follower;
use Illuminate\Http\Request;
use Storage;

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

        $followers = Follower::where('network_id', '=', $network)->paginate(15);
        
        return view('followers.index', compact('followers'));

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
        return view('followers.edit', compact($follower));
        
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
    public function ranking($network_id = null)
    {
        
        $followers = DB::table('comments')
                        ->select(DB::raw('count(network_follower_id) as no_comments, network_follower_id'))
                        ->where('network_id','=',$network_id)
                        ->whereNotNull('network_follower_id')
                        ->groupBy('network_follower_id')
                        ->orderBy('no_comments','desc')
                        ->limit(20)
                        ->get();

        // dd($followers[0]);
        // foreach($followers as $key => $follower ){
        //     $follow = Follower::where( 'network_follower_id',$follower->network_follower_id )->get(); 
        //     if( $follow){
        //         $followers[$key]['name'] = $follow->name;
        //     }else{
        //         $followers[$key]['name'] = null;
        //     }
            
        // }
        
        return view('followers.ranking',compact('followers','network_id'));
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
