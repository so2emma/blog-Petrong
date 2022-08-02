<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a href="{{ route('welcome') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            @if ($settings->where('key', 'show_logo')->first()->value)
                <img src="{{ asset('storage/' . $settings->where('key', 'blog_logo')->first()->value) }}" alt="">
            @endif
            @if ($settings->where('key', 'show_blog_name')->first()->value)
                <h1>{{ $settings->where('key', 'blog_name')->first()->value }}</h1>
            @endif
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="{{ route('welcome') }}" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>

                {{-- for category dropdown --}}
                @if ($settings->where('key', 'enable_blog')->first()->value)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($categories->whereNotIn('name', ['featured', 'slider', 'team']) as $category)
                                <li><a class="dropdown-item"
                                        href="{{ route('post.category', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($featuredposts as $featuredpost)
                                <li><a class="dropdown-item"
                                        href="{{ route('service', $featuredpost->id) }}">{{ $featuredpost->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>


                @endif

                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link active">Contact</a>
                </li>
            </ul>
            <div>
                <a href="{{ $settings->where('key', 'blog_facebook')->first()->value }}" class="mx-2 text-dark"><i
                        class="bi bi-facebook"></i></a>
                <a href="{{ $settings->where('key', 'blog_twitter')->first()->value }}" class="mx-2 text-dark"><i
                        class="bi bi-twitter"></i></a>
                <a href="{{ $settings->where('key', 'blog_instagram')->first()->value }}" class="mx-2 text-dark"><i
                        class="bi bi-instagram"></i></a>

                @if (Route::has('login') && Auth::check())
                    <a href="{{ route('dashboard') }}" class="text-dark"> Dashboard</a>
                @elseif (Route::has('login') && !Auth::check())
                    <a href="{{ route('login') }}" class="m-3 text-dark"> Login</a>
                @endif
            </div>
        </div>
    </div>
</nav>
