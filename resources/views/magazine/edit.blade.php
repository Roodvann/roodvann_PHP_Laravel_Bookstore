@extends('layouts.panel')
<?php  /** @var \Illuminate\Support\ViewErrorBag $errors */  ?>
@section('panel')
    <div class="panel-heading container-fluid">
        <div class="form-group">
            <div class="centered-child col-md-9 col-sm-7 col-xs-6">Edit book: <b>{{$magazine->title}}</b></div>
        </div>
    </div>

    <div class="panel-body">
        {!! Form::model($magazine, ['route' => ['magazine.update', $magazine->id], 'method' => 'PUT']) !!}

        @include('magazine._form')

        <div class="mt-2">
            @include('layouts.error')
        </div>

        <div class="form-group">
            {!! Form::button('Edit', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
            <a class="btn btn-warning" href="{{route('magazine.index')}}">
                <i class="fa fa-backward" aria-hidden="true"></i> Cancel
            </a>
        </div>

        {!! Form::close() !!}

    </div>

        <div class="pull-right">
            {{Form::open(['class' => 'confirm-delete', 'route' => ['magazine.destroy', $magazine->id], 'method' => 'DELETE'])}}
            {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
            {{Form::close()}}
        </div>

    {{--@include('layouts.errors')--}}

@endsection