<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container-fluid px-3 px-md-4">
    <a class="navbar-brand" href="{{ url('/') }}">
      <h1 class="h4">{{ config('app.name', 'Blog') }}</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
            <a class="nav-link active"
              aria-current="page" href="{{ route('welcome') }}"
              >Home</a>
          </li> -->
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('blog') }}">Blog</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @forelse($categories as $category)
            <li><a class="dropdown-item text-capitalize" href="{{ route('post.category', $category->id) }}">{{$category->name}}</a></li>
            @empty
            @endforelse
          </ul>
        </li>

        @if(Route::has('login') && Auth::check())
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </ul>
        </li>
        @elseif (Route::has('login') && !Auth::check())
        <li class="nav-item">
          <a href="{{route('login')}}" class="nav-link"> Login</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>