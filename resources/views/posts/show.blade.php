@extends('layout.app')

@section('content')
    <a href="/posts" class="btn btn-default"> Go Back </a>
    <h1> {{$posts->title}}</h1>
    <small>Written on {{$posts->created_at}}</small>
        <div>
            {!!$posts->body!!}
        </div>
 @endsection