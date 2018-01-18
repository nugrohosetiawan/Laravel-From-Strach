@extends('layout.app')

@section('content')
    <h3> Posts </h3>
    @if(count($posts) > 0 )
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3> <!--panggil fungsi judul-->
                <small>Written on {{$post->created_at}}</small> <!-- panggil tanggal-->
            </div>
        @endforeach
        {{$posts->links()}}
    @else
    <p> No Post Found </p>
    @endif 
@endsection