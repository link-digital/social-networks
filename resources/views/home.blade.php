@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/dashboard/facebook"><h1>Facebook</h1></a>
                    <a href="/dashboard/twitter"><h1>Twitter</h1></a>
                    <a href="/dashboard/instagram"><h1>Instagram</h1></a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
