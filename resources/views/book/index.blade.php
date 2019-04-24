@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">BOOKS</div>

                    <div class="form-group">
                        <a class="btn btn-success mt-2" href="{{route('home')}}">
                            <i class="fa fa-backward" aria-hidden="true"></i> <-- Back to Home
                        </a>
                    </div>

                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('template_id', 'Book') !!}--}}
                        {{--{!! Form::select(--}}
                        {{--'template_id',--}}
                        {{--\App\Book::getSelectList(),--}}
                        {{--isset($campaign) ? $campaign->template_id : null,--}}
                        {{--['class' => 'form-control']--}}
                        {{--) !!}--}}
                    {{--</div>--}}

                    <div class="panel-body">
                        <div class="form-group">
                        {{ link_to_route('book.create', 'Create new', null, ['class' => 'btn btn-info btn-xs']) }}
                        </div>
                        {{--<table class="table table-bordered table-responsive table-striped">--}}
                        <table class="table table-bordered table-responsive table-striped">
                            <tr class="thead-dark">
                                <th width="5%">id</th>
                                <th width="10%">Price</th>
                                <th width="15%">Title</th>
                                <th width="15%">Author</th>
                                <th width="10%">Pages</th>
                                <th width="16%">Publisher</th>
                                <th width="5%">Year</th>
                                <th width="2%">Hardcover</th>
                                <th width="2%">Size_id</th>
                                <th width="20%">Actions</th>
                            </tr>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{$book->id}}</td>
                                    <td>{{$book->price}}</td>
                                    <td>{{$book->title}}</td>
                                    <td>{{$book->author}}</td>
                                    <td>{{$book->pages}}</td>
                                    <td>{{$book->publisher}}</td>
                                    <td>{{$book->year}}</td>
                                    <td>{{$book->hardcover}}</td>
                                    <td>{{$book->size->height . "x" . $book->size->width}}</td>
                                    <td>
                                        {{Form::open(['class' => 'confirm-delete', 'route' => ['book.destroy', $book->id], 'method' => 'DELETE'])}}
                                        {{ link_to_route('book.show', 'Info', [$book->id], ['class' => 'btn btn-info btn-xs']) }}
                                        {{ link_to_route('book.edit', 'Edit', [$book->id], ['class' => 'btn btn-success btn-xs']) }}
                                        {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs mt-2', 'type' => 'submit'])}}
                                        {{Form::close()}}
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection