<nav class="navbar navbar1 navbar-expand-lg navbar navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand logo" href="{{ route('home') }}"><img src="\img\logo2.png" class="logo" alt="logo2"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto justify-content-center my-search">
        <form action="{{route('products.search')}}" method="GET" class="my-search-form d-flex">
          <input name="searched" class="form-control3 me-2" type="search" placeholder="{{ __('ui.search') }}" aria-label="Search">
          <button class="my-button btn" type="submit">{{ __('ui.search') }}</button>
        </form>
      </ul>
      <ul class="navbar-nav ms-auto">
        <div class="dropdown">
          <button class=" dropdown-title btn dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">{{__('ui.chooseLang')}}</button>
          <ul class="dropdown-menu" aria-labelledby="languageDropdown">
            <li class="nav-link "><x-_locale lang="it" />Italiano</li>
            <li class="nav-link"><x-_locale lang="en" />English</li>
            <li class="nav-link"><x-_locale lang="es" />Español</li>
          </ul>
        </div>
        <li class="nav-item dropdown">
          @auth
            <a class=" benvenuto nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{__('ui.welcome')}} {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @if(Auth::user()->is_revisor)
                <li>
                  <a class="dropdown-item1 text-light" href="{{ route('revisor.index') }}">{{ __('ui.revisorZone') }}
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"> {{ App\Models\Product::toBeRevisionedCount() }}
                      <span class="visually-hidden">{{ __('ui.unread messages') }}</span>
                    </span>
                  </a>
                </li>
              @endif
              <li>
                <a class="dropdown-item1 text-light" href="{{ route('products.create') }}">{{ __('ui.insertProduct') }}</a>
              </li>
              <li>
                <a onClick="event.preventDefault(); document.getElementById('logoutform').submit()" href="" class=" dropdown-item1 text-decoration-none text-light" >{{ __('ui.logout') }}</a>
                <form id="logoutform" method="POST" action="{{route('logout')}}">
                  @csrf
                </form>
              </li>
            </ul>
          @endauth
        </li>
        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('ui.register') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('ui.login') }}</a>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
