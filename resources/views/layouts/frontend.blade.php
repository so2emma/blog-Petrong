<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Web</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="{{asset('frontend/img/favicon.png')}}" rel="icon"> -->
    <link href="{{asset('frontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Vendor css')}} Files -->
    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main css')}} Files -->
    <link href="{{asset('frontend/css/variables.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: ZenBlog - v1.0.0
    * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
    * Author: BootstrapMade.com
    * License: https:///bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                    
                    <a href="{{ route('welcome') }}" class="logo d-flex align-items-center">
                        <!-- Uncomment the line below if you also wish to use an image logo -->
                        @if($settings->where('name', 'show_logo')->first()->value)
                            <img src="{{asset('storage/' . $settings->where('name', 'company_logo')->first()->value)}}" alt=""> 
                        @endif
                        @if($settings->where('name', 'show_company_name')->first()->value)
                            <h1>{{$settings->where('name', 'company_name')->first()->value}}</h1>
                        @endif
                    </a>
                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a href="{{ route('welcome') }}">Home</a></li>

                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            @if($settings->where('name', 'enable_blog')->first()->value)
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
                        <a href="{{$settings->where('name', 'company_facebook')->first()->value}}" class="mx-2 text-dark"><span class="bi-facebook"></span></a>
                        <a href="{{$settings->where('name', 'company_twitter')->first()->value}}" class="mx-2 text-dark"><span class="bi-twitter"></span></a>
                        <a href="{{$settings->where('name', 'company_instagram')->first()->value}}" class="mx-2 text-dark"><span class="bi-instagram"></span></a>
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

        <main id="main">

            @yield('content')

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

            <div class="footer-content">
                <div class="container">

                    <div class="row g-5">
                    <div class="col-lg-4">
                        <h3 class="footer-heading">About Us</h3>
                        <p>{{ Illuminate\Support\Str::words($settings->where('name', 'company_about')->first()->value, 40, '...')}}</p>
                        <p><a href="{{ route('about') }}" class="footer-link-more">Learn More</a></p>
                    </div>
                    <div class="col-lg-4">
                        <h3 class="footer-heading">Subscribe</h3>
                        
                        <form action="{{ route('subscriber.save') }}" method="POST" role="form">
                                    @csrf
                            <div class="form-group pt-2">
                                <div class="row">
                                <div class="col-md-2">
                                    <p>Name</p>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                </div>
                            </div>
                            <div class="form-group pt-2">
                                <div class="row">
                                <div class="col-md-2">
                                    <p>Email</p>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                </div>
                            </div>
                            <div class="pt-2"><a class="btn btn-light" href="" type="submit">Save</a></div>
                        </form>
                    </div>

                    <div class="col-lg-4">
                        <h3 class="footer-heading">Contact Us</h3>

                        <div class="position-relative">
                            <a href="{{$settings->where('name', 'company_facebook')->first()->value}}"  class="mx-2"><span class="bi-facebook"></span></a>
                            <a href="{{$settings->where('name', 'company_twitter')->first()->value}}" class="mx-2"><span class="bi-twitter"></span></a>
                            <a href="{{$settings->where('name', 'company_instagram')->first()->value}}" class="mx-2"><span class="bi-instagram"></span></a>
                            <a href="{{$settings->where('name', 'company_linkedin')->first()->value}}" class="mx-2"><span class="bi-linkedin"></span></a>
                        </div>

                        <p>{{$settings->where('name', 'company_email')->first()->value}}<br>
                        {{$settings->where('name', 'company_address')->first()->value}}</p>

                    </div>
                    </div>
                </div>
            </div>


        </footer>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('frontend/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('frontend/js/main.js')}}"></script>

</body>

</html>