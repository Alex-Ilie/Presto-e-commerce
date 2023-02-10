<nav class="navbar navbar-expand-lg navbar navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand logo" href="{{ route('home') }}"><img src="img\logo2.png" class="logo" alt="logo2"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            @auth

            <li>
                <p>Bentornat*, {{ Auth::user()->name }}</p>
                </li>
            <li>
              <form method="POST" action="{{route('logout')}}">
                @csrf
                <button class="btn btn-danger">Logout</button>
              </form>
            </li>

            @endauth
            @guest

            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Registrati</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            @endguest
          </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Cerca</button>
      </form>
    </div>
  </div>
</nav>
