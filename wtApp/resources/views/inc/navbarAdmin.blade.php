
       <!--<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href='/'>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href='/about'>About</a>
            </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='/services'>Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href='/posts'>Borrow a Vehicle</a>
          </li>
          </ul>

          <ul class="na navbar-nav navbar-right">
              <li class="nav-item">
                  <a class="nav-link" href='/posts/create'>Rent your vehicle</a>
                </li>
          </ul>


        </div>
      </nav>

    -->


    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/check') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
<!--Our Navbar
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href='/'>Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href='/about'>About</a>
                  </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='/services'>Services</a>
              </li>
              
                </ul>-->
<!--Till Here-->
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href='' href="" style="pointer-events: none;
                    cursor: default;">You are logged in as an admin</a>
                  </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
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
                        <li  class="nav-item">
                            <a class="nav-link" href="" style="pointer-events: none;
                            cursor: default;"role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <p>Hello {{Auth::user()->name }}  </p>
                            </a>

                            <li  class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                              </li>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>