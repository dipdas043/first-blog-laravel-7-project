@extends('main')

@section('title','|View Post')

@section('active')
<li class="nav-item"> 
    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/about">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/contact">Contact</a>
  </li>
<!--<li class="nav-item">
  <a class="nav-link" href="posts/create">Create</a>
</li>-->
@endsection

@section('content')
    <h1>{{ $post->title }}</h1>
    <div>
    <p>{{ $post->body }}</p>
    </div>
    <hr>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Actions
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="/">Back</a>
        <!--<a class="dropdown-item" href="/posts/{{$post->id}}/edit">Edit Post</a>
        <a class="dropdown-item" href="posts.destroy">Delete Post</a>-->
      </div>
    </div> 
@endsection