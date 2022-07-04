@extends('layouts.frontend')

@section('content')

    <main id="main">
      <section>
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-12 text-center mb-5">
              <h1 class="page-title">About us</h1>
            </div>
          </div>

          <div class="row mb-5">

            <div class="d-md-flex post-entry-2 half">
              <a href="#" class="me-4 thumbnail">
                <img src="{{asset('storage/' . $settings->where('name', 'company_about_image')->first()->value)}}" alt="" class="img-fluid">
              </a>
              <div class="ps-md-5 mt-4 mt-md-0">
                <div class="post-meta mt-4">About us</div>
                <h2 class="mb-4 display-4">Company History</h2>

                <p>{{$settings->where('name', 'company_about')->first()->value}}</p>
              </div>
            </div>

            <div class="d-md-flex post-entry-2 half mt-5">
              <a href="#" class="me-4 thumbnail order-2">
                <img src="{{asset('storage/' . $settings->where('name', 'company_vission_mission_image')->first()->value)}}" alt="" class="img-fluid">
              </a>
              <div class="pe-md-5 mt-4 mt-md-0">
                <div class="post-meta mt-4">Mission &amp; Vision</div>
                <h2 class="mb-4 display-4">Mission &amp; Vision</h2>

                <p>{{$settings->where('name', 'company_vission_mission')->first()->value}}</p>
              </div>
            </div>

          </div>

        </div>
      </section>

      <section>
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-12 text-center mb-5">
              <div class="row justify-content-center">
                <div class="col-lg-6">
                  <h2 class="display-4">Our Team</h2>
                  <!-- <p>Lorem ipsum dolor sitblanditiis. Dolore natus excepturi recusandae.</p> -->
                </div>
              </div>
            </div>
            @forelse($teamposts as $teampost)
              <div class="col-lg-4 text-center mb-5">
                <img src="{{asset('storage/' . $teampost->postImage)}}" alt="" class="img-fluid rounded-circle w-50 mb-4">
                <h4>{{ $teampost->title }}</h4>
                <span class="d-block mb-3 text-uppercase">{{$teampost->subtitle}}</span>
                <p>{{$teampost->content}}</p>
              </div>
            @empty
              <p>No team member data yet.</p>
            @endforelse
          </div>
        </div>
      </section>

    </main><!-- End #main -->
@endsection