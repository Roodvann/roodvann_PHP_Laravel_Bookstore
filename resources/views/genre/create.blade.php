@extends('layouts.panel')
<?php  /** @var \Illuminate\Support\ViewErrorBag $errors */  ?>
@section('panel')
    <div class="panel-heading container-fluid">
        <div class="form-group">
            <div class="centered-child col-md-11 col-sm-10 col-xs-10"><b>New Genre</b></div>
        </div>
    </div>

    <div class="panel-body">
        {!! Form::open(['route' => 'genre.store']) !!}

        @include('genre._form')
        @include('layouts.error')

        <div class="form-group">
            {!! Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
            <a class="btn btn-warning" href="{{route('genre.index')}}">
                <i class="fa fa-backward" aria-hidden="true"></i> Cancel
            </a>
        </div>

        {!! Form::close() !!}

    </div>

@endsection