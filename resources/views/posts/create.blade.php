@extends('layouts.app')

@section('content')
  <h1>Create Posts</h1>
  <form method="put" action="/create">
    @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text"  name="title" placeholder="Enter title.." class="form-control"/>
    </div>
    <div class="form-group">
    
    <textarea type="text" name="body" placeholder="Enter body of the post .." class="form-control"></textarea>
    
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
  
  
@endsection