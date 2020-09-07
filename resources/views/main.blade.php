<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">
<head>
@include('partials._head')
</head>

  <body style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Hot_air_balloon_over_a_pagoda_in_Bagan.jpg/1920px-Hot_air_balloon_over_a_pagoda_in_Bagan.jpg')">
      @include('partials._nav')
    <div class="container">
      @include('partials._messages')    
      @yield('content')
      @yield('slide')
      <p><i><center>Ⓒcopyright-Gowrab Das Dip</center></p>
      @include('partials._javascript')
      @yield('scripts')

      
    </body>
</html>
