@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Reactions</div>

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
                            <th>Followr ID</th>
                            <th>Type</th>
                            <th>Points</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                        @foreach ( $reactions as $key => $reaction )
                            <tr>
                                <td>  {{$reaction->id}} </td> 
                                <td>  {{$reaction->link}} </td>
                                <td>  {{$reaction->network_post_id}} </td>
                                <td>  {{$reaction->type}} </td>
                                <td>  {{$reaction->points}} </td>
                                <td> <button type="button" class="btn btn-info">Details</button> </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table> 
                    {{ $reactions->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
