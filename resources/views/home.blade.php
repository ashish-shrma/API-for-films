@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <div class="content">
                <div class="title m-b-md">
                    Welcome to Films Database
                </div>

                <div class="links">
                <li><a href="films/create">Add New Film</a></li>
                    <li><a href="/">All Films List</a></li>
                    
                </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
