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

                    You are logged in!
                </div>
            </div>
            <div class="btn-group mt-3">
                <button type="button" class="btn btn-primary">Select the table you want to view:</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('/book') }}">Books</a>
                    <a class="dropdown-item" href="{{ url('/magazine') }}">Magazines</a>
                    <a class="dropdown-item" href="{{ url('/newspaper') }}">Newspapers</a>
                    <a class="dropdown-item" href="{{ url('/size') }}">Sizes</a>
                    <a class="dropdown-item" href="{{ url('/genre') }}">Genres</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
