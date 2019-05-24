@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Comments</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table"> 
                        <thead class="thead-dark">
                            <th>ID</th>
                            <th>Comment Date</th>
                            <th>Message</th>
                            <th>Likes</th>
                            <th>No. Comments</th>
                            <th>C. Points</th>
                            <th>P. Likes</th>
                            <th>P. Keywords</th>
                            <th>P. Total</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                        @foreach ( $comments as $key => $comment )
                            <tr>
                                <td>  {{$comment->id}} </td> 
                                <td>  {{$comment->comment_date}} </td>
                                {{-- <td>  {{$comment->follower_id}} </td> --}}
                                {{-- <td>  {{$comment->link}} </td> --}}
                                <td>  {{$comment->message}} </td>
                                <td>  {{$comment->likes}} </td>
                                <td>  {{$comment->comments}} </td>
                                <td>  {{$comment->points}} </td>
                                
                                <td>  {{$comment->points_likes}} </td>
                                <td>  {{$comment->points_keywords}} </td>
                                <td>  {{$comment->points_total}} </td>
                                <td> <button type="button" class="btn btn-danger">Delete</button> </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table> 
                    {{$comments->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
