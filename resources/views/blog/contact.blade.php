@extends('layouts.frontend')

@section('content')

  <main id="main">
    <section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">Contact us</h1>
            <!-- <div id="gmaps-simple" class="gmaps">Map here</div> -->
          </div>
        </div>

        <div class="row">

          <div class="col-md-6">
              <h3>Location</h3>
              <address>{{$settings->where('name', 'company_address')->first()->value}}</address>
              <h6 class="pt-2">Phone No:</h6><p>{{$settings->where('name', 'company_phone')->first()->value ?? ""}}</p>
              <h6 class="pt-2">Social Network</h6>
              <div class="position-relative">
                <a href="{{$settings->where('name', 'company_facebook')->first()->value}}"  class="text-dark mx-2"><span class="bi-facebook"></span></a>
                <a href="{{$settings->where('name', 'company_twitter')->first()->value}}" class="text-dark mx-2"><span class="bi-twitter"></span></a>
                <a href="{{$settings->where('name', 'company_instagram')->first()->value}}" class="text-dark mx-2"><span class="bi-instagram"></span></a>
                <a href="{{$settings->where('name', 'company_linkedin')->first()->value}}" class="text-dark mx-2"><span class="bi-linkedin"></span></a>
              </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <h3>Send A Message</h3>
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
            <form action="{{ route('send.contact') }}" method="POST" role="form">
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
                <div class="form-group pt-2">
                  <div class="row">
                    <div class="col-md-2">
                      <p>Subject</p>
                    </div>
                    <div class="col-md-8">
                      <input type="text" class="form-control" name="subject" required>
                    </div>
                  </div>
                </div>
                <div class="form-group pt-2">
                  <div class="row">
                    <div class="col-md-2">
                      <p>Message</p>
                    </div>
                    <div class="col-md-8">
                      <textarea class="form-control" name="message" rows="5"required></textarea>
                    </div>
                  </div>
                </div>
              <div class="d-flex justify-content-between pt-2">
                <input class="btn btn-primary" style="min-width: 20%;" type="submit" value="Send">
                <!-- <button type="submit"></button> -->
              <!-- <button type="submit">Cancel</button> -->
            </div>
            </form>
          
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section>

  </main><!-- End #main -->

@endsection