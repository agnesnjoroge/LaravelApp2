@extends('layouts.app')

@section('content')
  <h1>Edit Post</h1>
  <form method="post" action="/edit/{$post->id}">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text"  name="title" placeholder="Enter title.." value="{{$post->title}}"class="form-control"/>
    </div>
    <div class="form-group">
    
    <textarea type="text" name="body" placeholder="Enter body of the post .." class="form-control" value="{{$post->body}}></textarea>"
    
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
  
  
@endsection