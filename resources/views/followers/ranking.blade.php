@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Social Ranking {{ucwords($network_id)}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table"> 
                        <thead class="thead-dark">
                            <th>Pos</th> 
                            <th>Follower</th>
                            <th>Comments Points</th>
                            <th>Shares Points</th>
                            <th>Reactions Points</th>
                            <th>Follower Points</th>
                            <th>Grant Total</th>
                        </thead>
                        <tbody>
                        @foreach ( $results as $key => $result )
                            <tr>
                                <th>{{ $rank++ }}</th> 
                                <th><a href="/followers/{{$result->follower_id}}/edit">{{$result->name}}</a></th>
                                <th>{{$result->comments_points }}</th>
                                <th>{{$result->share_points }}</th>
                                <th>{{$result->reactions_points }}</th>
                                <th>{{$result->follower_points }}</th>
                                <th>{{$result->grant_total }}</th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table> 
                    {{ $results->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection