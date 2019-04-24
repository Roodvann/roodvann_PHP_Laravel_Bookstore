@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">SIZES</div>

                    <div class="form-group">
                        <a class="btn btn-success mt-2" href="{{route('home')}}">
                            <i class="fa fa-backward" aria-hidden="true"></i> <-- Back to Home
                        </a>
                    </div>

                    <div class="panel-body">
                        <div class="form-group">
                        {{ link_to_route('size.create', 'Create new', null, ['class' => 'btn btn-info btn-xs']) }}
                        </div>
                        {{--<table class="table table-bordered table-responsive table-striped">--}}
                        <table class="table table-bordered table-striped">
                            <tr class="thead-dark">
                                <th width="10%">id</th>
                                <th width="30%">Width</th>
                                <th width="30%">Height</th>
                                <th width="30%">Actions</th>
                            </tr>
                            <tr>
                            </tr>
                            @foreach ($sizes as $size)
                                <tr>
                                    <td>{{$size->id}}</td>
                                    <td>{{$size->width}}</td>
                                    <td>{{$size->height}}</td>
                                    <td>
                                        {{Form::open(['class' => 'confirm-delete', 'route' => ['size.destroy', $size->id], 'method' => 'DELETE'])}}
                                        {{ link_to_route('size.show', 'Info', [$size->id], ['class' => 'btn btn-info btn-xs']) }}
                                        {{ link_to_route('size.edit', 'Edit', [$size->id], ['class' => 'btn btn-success btn-xs']) }}
                                        {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
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