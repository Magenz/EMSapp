<nav class="navbar navbar-expand-lg navbar-light bg-primary shadow p-3 mb-3 stick-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"> <strong>EMS APP</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          
          
{{-- PERSONAL INFO --}}
          <li class="nav-item dropdown">
            <h5 class="text-dark">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Personal Information
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/geninfo">General Information</a></li>
              <li><a class="dropdown-item" href="/address">Address</a></li>
              {{-- <li><hr class="dropdown-divider"></li> --}}
{{-- FAMILY BACKGROUND               --}}
            </ul>
            </h5>
          </li>
          <li class="nav-item dropdown">
            <h5 class="text-dark">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Family
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/geninfo">Family Background</a></li>
              <li><a class="dropdown-item" href="/address">Children</a></li>
              {{-- <li><hr class="dropdown-divider"></li> --}}
              
            </ul>
          </h5> 
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/workexp"><h5 class="text-dark">Experience</h5> </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/workexp"><h5 class="text-dark">Eligibility</h5> </a>
          </li>

          
        </ul>

         <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                {{-- news --}}
                <li class="nav-item">
                  <a class="nav-link" href="/home"><h5 class="text-dark">Publish News</h5> </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="/post"><h5 class="text-dark">News</h5> </a>
                </li>
                {{-- end news --}}
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    
                @endguest
              </ul>
      </div>
    </div>
  </nav>
  
