@extends('layouts.admin')
@section('content')
<div class="container-fluid">
  <h2 class="text-center">Settings</h2>
  <div class="card">
    <div class="card-body text-center">
      <h5>Fill in the details below</h5>
      @if($errors->any())
      <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
      </div>
      @endif
      @if(session()->has('status'))
      <div class="alert alert-success">
        {{ session()->get('status') }}
      </div>
      @endif
      <form action="{{ route('update.settings') }}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
          <label for="blog_name" class="col-md-3 col-form-label text-md-left">Company Name</label>
          <div class="col-md-6">
            <input type="text" class="form-control" name="blog_name" value="{{ $settings->where('key', 'blog_name')->first()->value }}" required autocomplete="blog_name" autofocus>
          </div>
        </div>

        <div class="form-group row">
          <label for="blog_phone" class="col-md-3 col-form-label text-md-left">Company Phone</label>
          <div class="col-md-6">
            <input type="text" class="form-control" name="blog_phone" value="{{ $settings->where('key', 'blog_phone')->first()->value }}" required autocomplete="blog_phone" autofocus>
          </div>
        </div>

        <div class="form-group row">
          <label for="blog_address" class="col-md-3 col-form-label text-md-left">Company Address</label>
          <div class="col-md-6">
            <input type="text" class="form-control" name="blog_address" value="{{ $settings->where('key', 'blog_address')->first()->value }}" required autocomplete="blog_address" autofocus>
          </div>
        </div>

        <div class="form-group row">
          <label for="blog_logo" class="col-md-3 col-form-label text-md-left">Company Logo</label>
          <input type="file" class="form-control" name="blog_logo" required autocomplete="blog_logo" autofocus>
        </div>

        <div class="form-group row">
          <label for="show_company" class="col-md-3 col-form-label text-md-left">Show Company Name</label>
          <div class="col-md-6 text-left">
            <input type="checkbox" id="show_company" name="show_blog_name" value="1" style="position: unset; opacity:1">
          </div>
        </div>
        <div class="form-group row">
          <label for="show_logo" class="col-md-3 col-form-label text-md-left">Show Company Logo</label>
          <div class="col-md-6 text-left">
            <input type="checkbox" id="show_logo" name="show_logo" value="1" style="position: unset; opacity:1">
          </div>
        </div>

        <div class="form-group row">
          <label for="blog_email" class="col-md-3 col-form-label text-md-left">Company E-mail</label>
          <div class="col-md-6">
            <input type="email" class="form-control" name="blog_email" value="{{ $settings->where('key', 'blog_email')->first()->value }}" required autocomplete="blog_email" autofocus>
          </div>
        </div>

        <div class="form-group row">
          <label for="blog_about" class="col-md-3 col-form-label text-md-left">Company About</label>
          <div class="col-md-6">
            <textarea name="blog_about" class="form-control">{{{ $settings->where('key', 'blog_about')->first()->value }}}</textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="blog_about_image" class="col-md-3 col-form-label text-md-left">Company About Image</label>
          <div class="col-md-6">
            <input type="file" class="form-control" name="blog_about_image" required autocomplete="blog_about_image" autofocus>
          </div>
        </div>

        <div class="form-group row">
          <label for="blog_vission_mission" class="col-md-3 col-form-label text-md-left">Company Vission And Mission</label>
          <div class="col-md-6">
            <textarea name="blog_vission_mission" class="form-control">{{{ $settings->where('key', 'blog_vission_mission')->first()->value }}}</textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="blog_vission_mission_image" class="col-md-3 col-form-label text-md-left">Company Vission And Mission Image</label>
          <div class="col-md-6">
            <input type="file" class="form-control" name="blog_vission_mission_image" required autocomplete="blog_vission_mission_image" autofocus>
          </div>
        </div>
        <div class="form-group row">
          <label for="enable_blog" class="col-md-3 col-form-label text-md-left">Enable Blog</label>
          <div class="col-md-6 text-left">
            <input type="checkbox" id="enable_blog" name="enable_blog" value="1" style="position: unset; opacity:1">
          </div>
        </div>

        <h4>Socials</h4>
        <div class="form-group row">
          <label for="blog_facebook" class="col-md-3 col-form-label text-md-left">Facebook</label>
          <div class="col-md-6">
            <input type="text" class="form-control" name="blog_facebook" value="{{ $settings->where('key', 'blog_facebook')->first()->value }}" placeholder="https://facebook.com/your_username">
          </div>
        </div>

        <div class="form-group row">
          <label for="blog_twitter" class="col-md-3 col-form-label text-md-left">Twitter</label>
          <div class="col-md-6">
            <input type="text" class="form-control" name="blog_twitter" value="{{ $settings->where('key', 'blog_twitter')->first()->value }}" placeholder="https://twitter.com/your_username">
          </div>
        </div>

        <div class="form-group row">
          <label for="blog_linkedin" class="col-md-3 col-form-label text-md-left">LinkedIn</label>
          <div class="col-md-6">
            <input type="text" class="form-control" name="blog_linkedin" placeholder="https://linkedin.com/your_username" value="{{ $settings->where('key', 'blog_linkedin')->first()->value }}" autocomplete="blog_linkedin" autofocus>
          </div>
        </div>

        <div class="form-group row">
          <label for="blog_instagram" class="col-md-3 col-form-label text-md-left">Instagram</label>
          <div class="col-md-6">
            <input type="text" class="form-control" name="blog_instagram" placeholder="https://instagram.com/your_username" value="{{ $settings->where('key', 'blog_instagram')->first()->value }}" autocomplete="blog_instagram" autofocus>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-12">
            <button class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
    </div>
  </div>

</div>
@endsection