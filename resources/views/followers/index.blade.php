@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Followers</div>

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
                                <td>  {{$follower->id}} </td> 
                                <td>  {{$follower->network_id}} </td>
                                <td>  {{$follower->name}} </td>
                                <td>  {{$follower->link}} </td>
                                <td>  -- </td>
                                <td>  -- </td>
                                <td>  -- </td>
                                <td>  -- </td>
                                <td> <button type="button" class="btn btn-danger">Delete</button> </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table> 
                    {{ $followers->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
