<nav class="navbar nav2">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">
      <ul class="d-flex list-unstyled">
        @foreach($categories as $category)
        <li class="nav-item fs-6 mx-3 ">
          <a class="nav-link" href="{{route('showCategory', $category)}}">{{$category->name}}</a>
        </li>
        @endforeach
      </ul>
    </span>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Cerca</button>
      </form>
  </div>
</nav>