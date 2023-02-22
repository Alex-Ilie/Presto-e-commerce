<nav class="navbar nav2">
    <div class="container-fluid d-flex">
        <span class="navbar-brand mb-0 h1 mx-auto">
            <ul class="d-flex list-unstyled">
                @foreach ($categories as $category)
                    <li class="nav-item fs-6 mx-3 ">
                        <a class="nav-link nav-link2"
                            href="{{ route('showCategory', $category) }}">{{ $category->name }}</a>
                    </li>
                    @if (session('locale') == 'it')
                        <li class="nav-item fs-6 mx-3 ">
                            <a class="nav-link nav-link2"
                                href="{{ route('showCategory', $category) }}">{{ $category->name }}</a>
                        </li>
                    @endif
                    @if (session('locale') == 'en')
                        <li class="nav-item fs-6 mx-3 ">
                            <a class="nav-link nav-link2"
                                href="{{ route('showCategory', $category) }}">{{ $category->en }}</a>
                        </li>
                    @endif
                    @if (session('locale') == 'es')
                        <li class="nav-item fs-6 mx-3 ">
                            <a class="nav-link nav-link2"
                                href="{{ route('showCategory', $category) }}">{{ $category->es }}</a>
                        </li>
                    @endif

                @endforeach
            </ul>
        </span>
    </div>
</nav>
