@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Posts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table"> 
                        <thead class="thead-dark">
                            <th>ID</th>
                            <th>Post ID</th>
                            <th>Followers ID</th>
                            <th>Link</th>
                            <th>Message</th>
                            <th>Likes</th>
                            <th>Comments</th>
                            <th>Points</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                        @foreach ( $comments as $key => $comment )
                            <tr>
                                <td>  {{$comment->id}} </td> 
                                <td>  {{$comment->post_id}} </td>
                                <td>  {{$comment->follower_id}} </td>
                                <td>  {{$comment->link}} </td>
                                <td>  {{$comment->message}} </td>
                                <td>  {{$comment->likes}} </td>
                                <td>  {{$comment->comments}} </td>
                                <td>  {{$comment->points}} </td>
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
