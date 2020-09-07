<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="/" style="max-width: 40px; max-height: 45px;">
    <img src="https://www.eventeny.com/users/pic/22017-business-product-hgxaspcpyckp1598881854-1200.jpg" class="img-fluid rounded-circle">
 </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       <!--active-->
     <!-- <li class="nav-item active"> 
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>-->
      @yield('active')
    </ul>
    <div class = "nav navbar-nav navbar-right col-md-3">
          <ul class="navbar-nav mr-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
                      <ul>  
                        <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ route('posts.create') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('create').submit();">
                            {{ __('Create New Post') }}
                        </a>
                      </li>
                      </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <form id="create" action="{{ route('posts.create') }}" method="GET" class="d-none">
                          @csrf
                      </form>
                    </div>
                </li>
            @endguest
        </ul>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="btn btn-info dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Creator info
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="https://www.facebook.com/Dipdas043">Facebook</a></li>
              <li><a class="dropdown-item" href="https://www.linkedin.com/in/gowrab-das-dip-a847b3134">LinkedIn</a></li>
              <li><div class="dropdown-divider"></div></li>
              <li><a class="dropdown-item" href="/creator">Creator</a></li>
            </ul>
          </ul>
        </li>
       </ul>
    </div>
      
  </div>
</nav>