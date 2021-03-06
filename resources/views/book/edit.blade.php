@extends('layouts.panel')
<?php  /** @var \Illuminate\Support\ViewErrorBag $errors */  ?>
@section('panel')
    <div class="panel-heading container-fluid">
        <div class="form-group">
            <div class="centered-child col-md-9 col-sm-7 col-xs-6">Edit book: <b>{{$book->title}}</b></div>
        </div>
    </div>

    <div class="panel-body">
        {!! Form::model($book, ['route' => ['book.update', $book->id], 'method' => 'PUT']) !!}

        @include('book._form')

        <div class="mt-2">
            @include('layouts.error')
        </div>

        <div class="form-group">
            {!! Form::button('Edit', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
            <a class="btn btn-warning" href="{{route('book.index')}}">
                <i class="fa fa-backward" aria-hidden="true"></i> Cancel
            </a>
        </div>

        {!! Form::close() !!}

    </div>

        <div class="pull-right">
            {{Form::open(['class' => 'confirm-delete', 'route' => ['book.destroy', $book->id], 'method' => 'DELETE'])}}
            {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
            {{Form::close()}}
        </div>

    {{--@include('layouts.errors')--}}

@endsection