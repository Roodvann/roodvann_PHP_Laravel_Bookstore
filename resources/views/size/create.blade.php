@extends('layouts.panel')
<?php  /** @var \Illuminate\Support\ViewErrorBag $errors */  ?>
@section('panel')
    <div class="panel-heading container-fluid">
        <div class="form-group">
            <div class="centered-child col-md-11 col-sm-10 col-xs-10"><b>New Size</b></div>
        </div>
    </div>

    <div class="panel-body">
        {!! Form::open(['route' => 'size.store']) !!}

        @include('size._form')
        @include('layouts.error')

        <div class="form-group">
            {!! Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
            <a class="btn btn-warning" href="{{route('size.index')}}">
                <i class="fa fa-backward" aria-hidden="true"></i> Cancel
            </a>
        </div>

        {!! Form::close() !!}

    </div>

@endsection