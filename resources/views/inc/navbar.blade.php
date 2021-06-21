<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home">EMS APP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/personal_information">Personal Information</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/children">Children</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/elligibility">Elligibility</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/learning_and_development">Learning and Development</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/refference">Refference</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/work_experience">Work Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/voluntary_work">Voluntary Work</a>
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
  