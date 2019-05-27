@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Facebook Posts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table"> 
                        <thead class="thead-dark">
                            <th>ID</th>
                            <th>Network</th>
                            <th>Message</th>
                            <th>Shares</th>
                            <th>Likes</th>
                            <th>Comments</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                        @foreach ( $posts as $key => $post )
                            <tr>
                                <td>  {{$post->id}} </td> 
                                <td>  {{$post->network_id}} </td>
                                <td>  {{$post->message}} </td>
                                <td>  {{$post->shares}} </td>
                                <td>  {{$post->likes}} </td>
                                <td>  {{$post->comments}} </td>
                                <td> <button type="button" class="btn btn-info">Details</button> </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table> 
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
