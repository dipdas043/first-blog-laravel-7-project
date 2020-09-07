@extends('main')

@section('title','|Home')

@section('active')
<li class="nav-item"> 
  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
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
      <div class = "col-md-12">
        <div class="well">
        <h1><center>About Us</center></h1>
        <div class="body sans gamma light centered">
          We aim to provide a platform for those who document and capture the world around us, bringing them together to create a lasting record of life on Earth; so that people everywhere can experience the cultural and natural wonders of our planet, can feel more connected to the biggest issues facing the world today, and can be empowered to <span class="no-wrap">create a better future.</span>
          <span class="no-wrap">create a better future.</span>
        </div>
        </div>
      </div> 
    </div>
@endsection