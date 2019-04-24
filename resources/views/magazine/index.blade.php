@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">MAGAZINES</div>

                    <div class="form-group">
                        <a class="btn btn-success mt-2" href="{{route('home')}}">
                            <i class="fa fa-backward" aria-hidden="true"></i> <-- Back to Home
                        </a>
                    </div>

                    <div class="panel-body">
                        <div class="form-group">
                        {{ link_to_route('magazine.create', 'Create new', null, ['class' => 'btn btn-info btn-xs']) }}
                        </div>
                        {{--<table class="table table-bordered table-responsive table-striped">--}}
                        <table class="table table-bordered table-responsive table-striped">
                        <tr class="thead-dark">
                                <th width="5%">id</th>
                                <th width="10%">Price</th>
                                <th width="15%">Subscription price</th>
                                <th width="15%">Title</th>
                                <th width="10%">Pages</th>
                                <th width="14%">Publisher</th>
                                <th width="5%">Year</th>
                                <th width="2%">Number</th>
                                <th width="2%">Nums per year</th>
                                <th width="2%">Size_id</th>
                                <th width="20%">Actions</th>
                            </tr>
                            @foreach ($magazines as $magazine)
                                <tr>
                                    <td>{{$magazine->id}}</td>
                                    <td>{{$magazine->price}}</td>
                                    <td>{{$magazine->subscriptionPrice}}</td>
                                    <td>{{$magazine->title}}</td>
                                    <td>{{$magazine->pages}}</td>
                                    <td>{{$magazine->publisher}}</td>
                                    <td>{{$magazine->year}}</td>
                                    <td>{{$magazine->number}}</td>
                                    <td>{{$magazine->numsPerYear}}</td>
                                    <td>{{$magazine->size_id}}</td>
                                    {{--<td>{{$magazine->size->height . "x" . $magazine->size->width}}</td>--}}
                                    <td>
                                        {{Form::open(['class' => 'confirm-delete', 'route' => ['magazine.destroy', $magazine->id], 'method' => 'DELETE'])}}
                                        {{ link_to_route('magazine.show', 'Info', [$magazine->id], ['class' => 'btn btn-info btn-xs']) }}
                                        {{ link_to_route('magazine.edit', 'Edit', [$magazine->id], ['class' => 'btn btn-success btn-xs']) }}
                                        {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs  mt-2', 'type' => 'submit'])}}
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