<nav class="navbar navbar1 navbar-expand-lg navbar navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand logo" href="{{ route('home') }}"><img src="\img\logo2.png" class="logo" alt="logo2"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <form class="justify-content-evenly my-search-form d-flex">
          <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search">
          <button class="my-button btn" type="submit">Cerca</button>
        </form>   
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
        @auth
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Bentornat*, {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="{{ route('products.create') }}">Inserisci prodotto</a>
            </li>
            <li>
              <a onClick="event.preventDefault(); document.getElementById('logoutform').submit()" href="" class="text-decoration-none dropdown-item" >Log out</a>
              <form id="logoutform" method="POST" action="{{route('logout')}}">
                @csrf
          
              </form>
            </li>
          </ul>
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
    </div>
  </div>
</nav>
