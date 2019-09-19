@extends('layouts.app', ['activePage' => Request()->network_id , 'titlePage' => __('Posts')])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Shares</div>

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
                        @foreach ( $shares as $key => $share )
                            <tr>
                                <td>  {{$share->id}} </td> 
                                <td>  {{$share->link}} </td>
                                <td>  {{$share->network_post_id}} </td>
                                <td>  {{$share->type}} </td>
                                <td>  {{$share->points}} </td>
                                <td> <button type="button" class="btn btn-info">Details</button> </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table> 
                    {{ $shares->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
