@extends('layouts.frontend')

@section('content')

<main id="main">
  <!-- ======= Hero Slider Section ======= -->
  <section id="hero-slider" class="hero-slider">
    <div class="container-md" data-aos="fade-in">
      <div class="row">
        <div class="col-12">
          @if($errors->any())
          <div class="alert alert-danger col-md-6">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
          </div>
          @endif
          @if(session()->has('status'))
          <div class="alert alert-success col-md-6">
            {{ session()->get('status') }}
          </div>
          @endif
          <div class="swiper sliderFeaturedPosts">
            <div class="swiper-wrapper">
              @foreach($sliderposts as $sliderpost)
              <div class="swiper-slide">
                <a href="{{ route('post.show', $sliderpost->id) }}" class="img-bg d-flex align-items-end" style="background-image: url({{`/storage/`.$sliderpost->postImage}})">
                  <div class="img-bg-inner">
                    <h2>{{ $sliderpost->title }}</h2>
                    <p>{{ Illuminate\Support\Str::words($sliderpost->content, 30, '...')}} </p>
                  </div>
                </a>
              </div>
              @endforeach
            </div>
            <div class="custom-swiper-button-next">
              <span class="bi-chevron-right"></span>
            </div>
            <div class="custom-swiper-button-prev">
              <span class="bi-chevron-left"></span>
            </div>

            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero Slider Section -->
  <!-- Featured Posts -->
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            @if($featuredposts)
            <h2 class="display-4">Featured Posts</h2>
            @endif
          </div>
        </div>
      </div>
      @foreach($featuredposts as $featuredpost)
      <div class="col-lg-4 text-center p-3">
        <div class="">
          <a href="{{ route('post.show', $featuredpost->id) }}">
            <img src="{{asset('storage/' . $featuredpost->postImage)}}" alt="" class="card-img-top" style="
                height: 200px;
                object-fit: cover;
              ">
          </a>
          <div class="post-meta"><span class="date">{{$featuredpost->category->name}}</span> <span class="mx-1">&bullet;</span> <span>{{$featuredpost->created_at->format('M d Y')}}</span></div>
          <h2><a href="{{ route('post.show', $featuredpost->id) }}" class="text-dark">{{ $featuredpost->title }}</a></h2>
          <p>{{ Illuminate\Support\Str::words($featuredpost->content, 30, '...')}}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!-- End Featured Posts -->
  <!-- Authors -->
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h2 class="display-4">Authors</h2>
          </div>
        </div>
      </div>
      @foreach($authors as $author)
      @if($author->count())
      <div class="col-lg-4 text-center mb-5">
        @if($author->profile_photo)
        <img src="{{asset('storage/' . $author->profile_photo)}}" alt="" class="img-fluid rounded-circle w-50 mb-4">
        @else
        <img src="{{asset('storage/user.png')}}" alt="" class="img-fluid rounded-circle w-50 mb-4">

        @endif
        <h4>{{$author->name}}</h4>
        <a href="{{$author->facebook}}" class="text-dark mx-2"><span class="bi-facebook"></span></a>
        <a href="{{$author->twitter}}" class="text-dark mx-2"><span class="bi-twitter"></span></a>
        <a href="{{$author->instagram}}" class="text-dark mx-2"><span class="bi-instagram"></span></a>
      </div>
      @endif
      @endforeach
    </div>
  </div>
  <!-- End Authors -->
</main><!-- End #main -->

@endsection