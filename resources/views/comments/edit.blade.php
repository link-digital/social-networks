
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Comment Detail</div> 

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card" style="width: 18rem;">
                        @if ($comment->network_id == 'Facebook')
                            <img class="card-img-top" src="{{asset('images/facebook.jpg')}}" alt="Card image cap">    
                        @endif
                        @if ($comment->network_id == 'Twitter')
                            <img class="card-img-top" src="{{asset('images/twitter.png')}}" alt="Card image cap">    
                        @endif
                        @if ($comment->network_id == 'Instagra,')
                            <img class="card-img-top" src="{{asset('images/instagram.jpeg')}}" alt="Card image cap">    
                        @endif
                        
                        <div class="card-body">
                            <h5 class="card-title">Comment: {{$comment->message}}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Follower: {{$comment->follower->name}}</li>
                            <li class="list-group-item">Post: {{$comment->post->message}}</li>
                            <li class="list-group-item">No. Likes: {{$comment->likes}}</li>
                            <li class="list-group-item">No. Comments: {{$comment->comments}}</li>
                            <li class="list-group-item">No. Points: {{$comment->points}}</li>
                            <li class="list-group-item">C. Points: {{$comment->points_comments}}</li>
                            <li class="list-group-item">K. Points: {{$comment->points_keywords}}</li>
                            <li class="list-group-item">L. Points: {{$comment->points_likes}}</li>
                            <li class="list-group-item">Total Points{{$comment->points_total}}</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Posted: {{$comment->comment_date}}</a>
                            {{-- <a href="#" class="card-link">Another link</a> --}}
                        </div>
                    </div>
                    {{-- <comments-edit-component></comments-edit-component> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection