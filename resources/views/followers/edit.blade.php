


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Follower Info</div>
                 <div class="card-body">
                            <h5 class="card-title"> Name: {{$follower->name}}</h5>
                            <h5 class="card-title"> Network: {{$follower->network_id}}</h5>
                            <h5 class="card-title"> Account: {{$follower->account}}</h5>
                            <h5 class="card-title"> Account: {{$follower->network_follower_id}}</h5>

                        </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Comments</h1>
                    <table class="table"> 
                        <thead class="thead-dark">
                            <th>Network ID</th>
                            <th>Account</th>
                            <th>Post ID</th>
                            <th>Points</th>
                            <th>C.Points</th>
                            <th>L.Points</th>
                            <th>K. Points</th>
                            <th>T. Points</th>
                        </thead>
                        <tbody>
                        @foreach ( $follower->getComments as $key => $comment )
                            <tr>
                                <td>{{$comment->network_id}}</td>
                                <td>{{$comment->account}}</td>
                                <td>{{$comment->post_id}}</td>
                                <td>{{$comment->points}}</td>
                                <td>{{$comment->points_comments}}</td>
                                <td>{{$comment->points_likes}}</td>
                                <td>{{$comment->points_keywords}}</td>
                                <td>{{$comment->points_total}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table> 
                    <h1>Reactions</h1>
                    <table class="table"> 
                        <thead class="thead-dark">
                            <th>Network ID</th>
                             <th>Account</th>
                            <th>Post ID</th>
                            <th>Type</th>
                            <th>Points</th>
                        </thead>
                        <tbody>
                        @foreach ( $follower->getReactions as $key => $reaction )
                            <tr>
                                <td>{{$reaction->network_id}}</td>
                                <td>{{$reaction->account}}</td>
                                <td>{{$reaction->post_id}}</td>
                                <td>{{$reaction->type}}</td>
                                <td>{{$reaction->points}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table> 
                    
                    <h1>Shares</h1>
                    <table class="table"> 
                        <thead class="thead-dark">
                            <th>Network ID</th>
                            <th>Account</th>
                            <th>Post ID</th>
                            <th>Points</th>
                        </thead>
                        </thead>
                        <tbody>
                        @foreach ( $follower->getShares as $key => $share )
                            <tr>
                                <td>{{$share->network_id}}</td>
                                <td>{{$share->account}}</td>
                                <td>{{$share->post_id}}</td>
                                <td>{{$share->points}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection