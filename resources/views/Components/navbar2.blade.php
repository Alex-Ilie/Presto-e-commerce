<nav class="navbar nav2">
  <div class="container-fluid d-flex">
    <span class="navbar-brand mb-0 h1">
      <ul class="d-flex list-unstyled">
        @foreach($categories as $category)
        <li class="nav-item fs-6 mx-3 ">
          <a class="nav-link" href="{{route('showCategory', $category)}}">{{$category->name}}</a>
        </li>
        @endforeach
      </ul>
    </span>
  </div>
</nav>