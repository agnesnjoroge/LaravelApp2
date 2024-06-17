@extends('layouts.app')

@section('content')
  <h1>Posts</h1>

  
    @foreach($posts as $post)
    <div class="well">
      <h3><a href="/posts/{{$post->id}}">{{$post['title']}}</a></h3>
      
      <small>Written on {{$post->created_at}}</small>
      
    </div>
    @endforeach
    
  
@endsection