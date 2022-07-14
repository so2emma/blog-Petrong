
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                    
                    <a href="{{ route('welcome') }}" class="logo d-flex align-items-center">
                        <!-- Uncomment the line below if you also wish to use an image logo -->
                        @if($settings->where('key', 'show_logo')->first()->value)
                            <img src="{{asset('storage/' . $settings->where('key', 'blog_logo')->first()->value)}}" alt=""> 
                        @endif
                        @if($settings->where('key', 'show_blog_name')->first()->value)
                            <h1>{{$settings->where('key', 'blog_name')->first()->value}}</h1>
                        @endif
                    </a>
                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a href="{{ route('welcome') }}">Home</a></li>

                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            @if($settings->where('key', 'enable_blog')->first()->value)
                                <li class="dropdown"><a href=""><span>Categories</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                    <ul>
                                        @foreach($categories->whereNotIn('name',['featured','slider','team']) as $category)
                                            <li><a href="{{ route('post.category', $category->id) }}">{{$category->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="dropdown"><a href=""><span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                    <ul>
                                        @foreach($featuredposts as $featuredpost)
                                            <li><a href="{{ route('service', $featuredpost->id) }}">{{$featuredpost->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                                
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        
                        </ul>
                    </nav><!-- .navbar -->

                    <div class="position-relative">
                        <a href="{{$settings->where('key', 'blog_facebook')->first()->value}}" class="mx-2 text-dark"><span class="bi-facebook"></span></a>
                        <a href="{{$settings->where('key', 'blog_twitter')->first()->value}}" class="mx-2 text-dark"><span class="bi-twitter"></span></a>
                        <a href="{{$settings->where('key', 'blog_instagram')->first()->value}}" class="mx-2 text-dark"><span class="bi-instagram"></span></a>
                        <a href="{{ route('login') }}" class="m-3 text-dark"> Login</a>

                        <a href="#" class="mx-2 js-search-open d-none" ><span class="bi-search"></span></a>
                        <i class="bi bi-list mobile-nav-toggle"></i>

                        <!-- ======= Search Form ======= -->
                        <div class="search-form-wrap js-search-form-wrap">
                        <form action="search-result.html" class="search-form">
                            <span class="icon bi-search"></span>
                            <input type="text" placeholder="Search" class="form-control">
                            <button class="btn js-search-close"><span class="bi-x"></span></button>
                        </form>
                        <!-- </div> -->
                        <!-- End Search Form -->
                        
                    </div>
            </div>

        </header><!-- End Header -->