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
                            <th>Points</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Link</th>
                            <th>T. Likes</th>
                            <th>T. Comments</th>
                            <th>T. P Likes</th>
                            <th>T. P Comments</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                        @foreach ( $followers as $key => $follower )
                            <tr>
                                <td>  {{ $follower->no_comments }} </td> 
                                <td>  {{ $follower->network_follower_id }} </td>
                                <td>  {{ App\Follower::where( 'network_follower_id',$follower->network_follower_id )->first()->name }} </td>
                                <td>  NULL </td>
                                <td>  NULL </td>
                                <td>  NULL </td>
                                <td>  NULL </td>
                                <td>  NULL </td>
                                <td> <button type="button" class="btn btn-danger">Delte</button> </td>
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