@extends('layouts.app')

@section('content')

    <div class="title">Contact Page</div>

    @if(count($people))

        <ul>

        @foreach($people as $person)

            <li>{{$person}}</li>

        @endforeach

        </ul>

    @endif

@stop


@section('footer')

    <script>alert('Hello visitor')</script>

@stop