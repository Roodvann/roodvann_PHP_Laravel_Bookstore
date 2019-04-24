@extends('layouts.panel')
<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
/** @var \App\Magazine $magazine */
?>
@section('panel')
    <div class="panel-heading container-fluid">
        <div class="form-group">
            <div class="centered-child col-md-9 col-sm-7 col-xs-6">Info about magazine: <b>{{$magazine->title}}</b></div>
        </div>
    </div>

    <div class="panel-body">

        <table class="table table-bordered">
            <tr>
                <th width="25%">Attribute</th>
                <th width="75%">Value</th>
            </tr>
            @foreach ($magazine->getAttributes() as $attribute => $value)
                <tr>
                    <td>{{$attribute}}</td>
                    <td>{{$value}}</td>
                </tr>
            @endforeach
        </table>

    </div>


    {{--Виклик функції getPrice(50)--}}
    {{--{{$magazine->getPrice(50)}}--}}
    {{--{{$magazine->reserve()}}--}}


    <div class="form-group">
    {{Form::open(['class' => 'confirm-delete', 'route' => ['magazine.destroy', $magazine->id], 'method' => 'DELETE'])}}
    {{ link_to_route('magazine.edit', 'Edit', [$magazine->id], ['class' => 'btn btn-primary btn-xs']) }}
    {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
    {{Form::close()}}
    </div>
    <a class="btn btn-info" href="{{route('magazine.index')}}">
        <i class="fa fa-backward" aria-hidden="true"></i> Go back
    </a>

    {{--<p>{{\App\Http\Controllers\BookController::customize()}}</p>--}}

@endsection