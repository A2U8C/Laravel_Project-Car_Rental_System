      <nav class="navbar navbar-expand-md navbar-dark bg-dark text-white">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
<!--Our Navbar-->
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href='/'>Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href='/about'>About</a>
                  </li>
              </li>
              <!--SERVICES PAGE
                <li class="nav-item">
                <a class="nav-link" href='/services'>Services</a>
              </li>
            -->
              <li class="nav-item">
                  <a class="nav-link" href='/posts'>Borrow a Vehicle</a>
                </li>
                </ul>
<!--Till Here-->

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
                            <a class="nav-link" href='/home'>
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