@extends('main')

@section('title','|Create New Post')

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
<li class="nav-item">
  <a class="nav-link" href="posts/create">Create</a>
</li>
@endsection

  
  @section('content')
      <div class = "row">
        <div class = "col-md-12">
          <h1>Edit Post</h1>
          {!! Form::open(array('route' => 'posts.update'))!!}
            {{Form::label('title','Title:')}}
            {{Form::text('title',$post->title,array('class'=> 'form-control'))}}
            {{Form::label('body',"Post Body")}}
            {{Form::textarea('body',$post->body,array('class'=> 'form-control'))}}
            {{Form::submit('Submit',array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'))}}
          {!! Form::close() !!}
        </div> 
      </div>
  @endsection
  