  <!-- 헤더 부분  -->
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">FORUM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" href="{{url('/category')}}">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page"  href="{{url('/')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">Register</a>
        </li>      
      </ul>
    </div>
  </div>
</nav>