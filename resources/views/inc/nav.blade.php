  <!-- 헤더 부분  -->
  <nav class="navbar navbar-expand-lg bg-light">
      <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">FORUM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  @auth
                      <li class="nav-item">
                          <a class="nav-link active" href="{{ url('/category') }}">Category</a>
                      </li>
                  @endauth
                  @guest
                      <li class="nav-item">
                          <a class="nav-link " aria-current="page" href="{{ url('/login') }}">Login</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ url('/register') }}">Register</a>
                      </li>
                  @endguest
                  @auth
                      <li class="nav-item">
                          <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <a class="nav-link "
                                  href="route('logout')"onclick="event.preventDefault(); this.closest('form').submit();">Log
                                  Out (환영합니다.{{ auth()->user()->name }}님.)
                              </a>
                          </form>
                      </li>
                  @endauth
              </ul>
          </div>
      </div>
  </nav>
