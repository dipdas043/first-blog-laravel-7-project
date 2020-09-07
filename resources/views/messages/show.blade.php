@extends('main')

@section('title','|View Message')

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
    <h1>{{ $contact->name }}</h1>
    <p>{{ $contact->message }}</p>
@endsection