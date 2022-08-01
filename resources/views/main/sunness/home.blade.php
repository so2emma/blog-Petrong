<style>
  @media (min-width: 870px) {
    .carousel .carousel-item{
      height: 80vh;
    }
    .carousel-item img {
      min-height: 80vh;
    }
  }
</style>

<div id="hero_carousel" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#hero_carousel" data-bs-slide-to="0" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#hero_carousel" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#hero_carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="{{asset('changeable/white_snow_moutain.jpeg')}}" class="d-block w-100" alt="Blog Images">
    </div>
    <div class="carousel-item active">
      <img src="{{asset('changeable/green_tree_moutain.jpeg')}}" class="d-block w-100" alt="Blog Images">
    </div>
    <div class="carousel-item">
      <img src="{{asset('changeable/blue_water_mountain.jpeg')}}" class="d-block w-100" alt="Blog Images">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#hero_carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#hero_carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="mission p-3 p-md-5">
  <div class="row">
    <div class="col-md-6">
      <h5>Our Vission</h5>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id fugiat minima, soluta sed consequatur nihil, voluptatibus nam tenetur tempore ipsam expedita magnam odit ad itaque quia, at architecto ducimus maxime!</p>
    </div>
    <div class="col-md-6">
      <h5>Our Mission</h5>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id fugiat minima, soluta sed consequatur nihil, voluptatibus nam tenetur tempore ipsam expedita magnam odit ad itaque quia, at architecto ducimus maxime!</p>
    </div>
  </div>
</div>


<!-- <main id="main">
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
  </section>
  

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
</main> -->
<!-- End #main -->