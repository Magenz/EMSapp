<nav class="navbar navbar-expand-lg navbar-light text-dark bg-transparent shadow p-1 mb-3 fix-top" style="background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,1) 53%, rgba(193,236,212,1) 69%, rgba(158,225,188,1) 82%, rgba(144,221,178,1) 87%, rgba(103,208,149,1) 94%, rgba(36,188,103,1) 100%);">
    <div class="container-fluid">   
      <a class="navbar-brand" href="/"> <strong class="text-dark">EMS APP</strong></a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
      @auth
          
     
          
{{-- PERSONAL INFO --}}
          <li class="nav-item dropdown">
            <h5 class="text-dark">
            <a class="nav-link dropdown-toggle text-dark mx-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Personal Information
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/geninfo">General Information</a></li>
              <li><a class="dropdown-item" href="/address">Address</a></li>
              <li><a class="dropdown-item" href="/eligibility">Eligibility</a></li>
              {{-- <li><hr class="dropdown-divider"></li> --}}
            </ul>
            </h5>
          </li>


{{-- Educ INFO --}}
          <li class="nav-item dropdown">
            <h5 class="text-dark">
            <a class="nav-link dropdown-toggle text-dark mx-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Education
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/education">School</a></li>
              <li><a class="dropdown-item" href="/learninganddevelopment">Learning and Development</a></li>
              {{-- <li><hr class="dropdown-divider"></li> --}}
            </ul>
          </h5>
        </li>
{{-- FAMILY BACKGROUND --}}
          <li class="nav-item dropdown">
            <h5 class="text-dark">
              <a class="nav-link dropdown-toggle text-dark mx-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Family
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/family">Parents and Spouse</a></li>
              <li><a class="dropdown-item" href="/children">Children</a></li>
              {{-- <li><hr class="dropdown-divider"></li> --}}
            </ul>
          </h5> 
          </li>
{{-- Experience --}}
<li class="nav-item dropdown">
  <h5 class="text-dark">
    <a class="nav-link dropdown-toggle text-dark mx-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Experience
  </a>
  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item" href="/workexp">Work Experience</a></li>
    <li><a class="dropdown-item" href="/voluntarywork">Voluntary Works</a></li>
    {{-- <li><hr class="dropdown-divider"></li> --}}
  </ul>
</h5> 
</li>          


         
         
          @endauth  
        </ul>
         

       
         <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto text-dark mx-2">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item ">
                            <a class="nav-link text-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                {{-- news --}}
                <li class="nav-item">
                  <a class="nav-link" href="/home"><h5 class="text-dark mx-2">Publish News</h5> </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="/post"><h5 class="text-dark mx-2">News</h5> </a>
                </li>
                {{-- end news --}}
                    <li class="nav-item dropdown"><h5>
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                      </h5> 
                      </li>
                    
                @endguest
              </ul>
      </div>
    </div>
  </nav>
  
