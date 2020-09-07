@extends('main')

@section('title','|Creator')
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


<div class="row">
    <div class = "col-md-12">
        <h1>Hi, i am {{ $data['fullname'] }} </h1>
        <p>You can connect me through my email id - {{ $data ['email'] }}</p>
        <p>You can connect me through my phone - {{ $data ['phone'] }}</p>
    </div>
</div>
@endsection