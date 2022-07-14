<footer id="footer" class="footer">
  <div class="footer-content">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-4">
          <h3 class="footer-heading">About Us</h3>
          <p>{{ Illuminate\Support\Str::words($settings->where('key', 'blog_about')->first()->value, 40, '...')}}</p>
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
            <a href="{{$settings->where('key', 'blog_facebook')->first()->value}}" class="mx-2"><span class="bi-facebook"></span></a>
            <a href="{{$settings->where('key', 'blog_twitter')->first()->value}}" class="mx-2"><span class="bi-twitter"></span></a>
            <a href="{{$settings->where('key', 'blog_instagram')->first()->value}}" class="mx-2"><span class="bi-instagram"></span></a>
            <a href="{{$settings->where('key', 'blog_linkedin')->first()->value}}" class="mx-2"><span class="bi-linkedin"></span></a>
          </div>
          <p>{{$settings->where('key', 'blog_email')->first()->value}}<br>
            {{$settings->where('key', 'blog_address')->first()->value}}
          </p>

        </div>
      </div>
    </div>
  </div>
</footer>