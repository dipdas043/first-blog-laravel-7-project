@extends('main')

@section('title','|Create New Post')



@section('active')
<li class="nav-item"> 
  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="/about">About</a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="">Contact</a>
</li>
<!--<li class="nav-item">
  <a class="nav-link" href="posts/create">Create</a>
</li>-->
@endsection

@section('content')
          <div class = "row">
            <div class = "col-md-8 col-md-offset-2">
              <h1>Send Message</h1>
              {!! Form::open(array('route' => 'messages.store')) !!}
              {{Form::label('name','Full Name:')}}
              {{Form::text('name',null,array('class'=> 'form-control'))}}
              {{Form::label('email','Email:')}}
              {{Form::text('email',null,array('class'=> 'form-control'))}}
              {{Form::label('subject','Subject:')}}
              {{Form::text('subject',null,array('class'=> 'form-control'))}}
              {{Form::label('message',"Message")}}
              {{Form::textarea('message',null,array('class'=> 'form-control'))}}
              {{Form::submit('Submit',array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'))}}
              {!! Form::close() !!}
            </div>
        </div>
@endsection