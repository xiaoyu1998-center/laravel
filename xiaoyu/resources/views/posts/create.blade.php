@extends('layouts.app')

@section('content')


    {{--<form action="/posts" method="post">--}}


    {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store','files'=>true]) !!}

    <div class="form-group">
        {!! Form::file('file',  ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@endsection