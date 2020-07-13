@extends('layouts.app')

@section('content')


    <form action="/posts" method="POST">
        {{csrf_field()}}
        <input type="text" name="title" placeholder="Enter title">
        <input type="submit" name="submit">
    </form>

@endsection