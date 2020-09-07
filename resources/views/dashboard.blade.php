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
  <a class="nav-link" href="posts/create">Create Post</a>
</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hello ')}}{{ Auth::user()->name }}{{ __(',You are logged in!')}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                        </div>
                    @endif
                    {{ __('Now you Can create new post!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
