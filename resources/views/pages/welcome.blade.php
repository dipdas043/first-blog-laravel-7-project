@extends('main')

@section('title','|Home')

@section('active')
<li class="nav-item active"> 
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
<div class = "row">
  <div class = 'col-md-12'>
   <div class="jumbotron">
       <h1 class="display-4">Hello, Guys</h1>
       <p class="lead">This is a travel blog site.If you want to write a post then you have to be logged in first.
         If you want to learn more about us click on the button below.</p>
         <a class="btn btn-primary btn-lg" href="/about" role="button">Learn more</a>
       </p>
     </div> 
       <div class = "row">
        <div class = 'col-md-8'>
          <h1 style="color: yellow">Recent Posts</h1>
          @if(count($posts) > 1)
            @foreach ($posts as $posts)
                <div class="well">
                <h2><a href="/posts/{{$posts ->id}}">{{$posts->title}}</a></h2>
                <small><i>Written on {{$posts ->created_at}}</i></small>
                <p><strong>{{$posts ->body}}</strong></p>
                </div>
                <hr>
            @endforeach
          @else 
            <p style="color: red"> No posts found</p> 
          @endif
         </div>
        <div class = 'col-md-3 col-md-offset-1'>
           <div class="post">
             <h5 style="color:blue"><i><strong><u>Featured Post</u></strong></i></h5>
             <div class="well">
              <h2 style="color: blueviolet">{{$posts->title}}</h2>
              <small><i>Written on {{$posts ->created_at}}</i></small>
              <p><strong>{{$posts ->body}}</strong></p>
              </div>
             <a class = "btn btn-secondary" href="/posts/{{$posts ->id}}">Read the full post</a>
           </div>  
         </div>
       </div>

  </div>
</div>
@endsection
@section('slide')
<div class="row">
  <div class="col-md-13">
    @include('partials._footer')
  </div>
</div>    
@endsection