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
                            <th>No. Comments in posts</th>
                            <th>Name</th>
                            <th>Link</th>
                            <th>T. Likes</th>
                            <th>T. Comments</th>
                            <th>T. P Likes</th>
                            <th>T. P Comments</th>
                            <th>Profile</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                        @foreach ( $followers as $key => $follower )
                            <tr>
                                <td>  {{ $key + 1 }}</td>
                                <td>  {{ $follower->no_comments }} </td> 
                                <td>  {{ App\Follower::where( 'network_follower_id',$follower->network_follower_id )->first()->name }} </td>
                                <td>  -- </td>
                                <td>  -- </td>
                                <td>  -- </td>
                                <td>  -- </td>
                                <td>  {{ $follower->no_comments * 2 }} </td>
                                <td>  <a target='_blank' href="https://www.facebook.com/profile.php?id={{ $follower->network_follower_id }}"> View Profile </a> </td>
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