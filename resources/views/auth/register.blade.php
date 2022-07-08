<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the ser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/images/favicon.png')}}">
  <title>Account Details</title>
  <!-- Bootstrap Core CSS -->
  <link href="{{asset('admin/node_modules/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
  <!-- You can change the theme colors from here -->
  <link href="{{asset('admin/css/colors/default.css')}}" id="theme" rel="stylesheet">
</head>

<body class="card-no-border">
  <div class="text-center py-5">
    <h2> Settings </h2>
    <div class="d-flex justify-content-center">
      <div class="col-md-6">
        <p>Now we need a few more information to personalise {{config('app.name', 'Blog')}} for you </p>
        <form method="POST" action="{{route('register')}}" class="text-left pb-5">
          @csrf
          <div class="card bg-light p-3 p-md-5 pb-3">

            <h4>Product Detail</h4>
            <p class="mb-3"> Describe your blog and customize it for yourself, these are details that will be shown on the website page. </p>
            <hr>

            <div class="form-group">
              <label for="blog_name" class="col-form-label"><span class="required">*</span>Blog Name <small>(your website name, e.g. 'Petrong Solutions')</small></label>
              <input id="blog_name" type="text" 
                class="form-control @error('blog_name') is-invalid @enderror"
                name="blog_name" value="{{ old('blog_name') }}" required 
                autocomplete="name" placeholder="e.g Emmy's Blog" autofocus>
              @error('blog_name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="blog_email" class="col-form-label"><span class="required">*</span>Blog Email <small>(your website's contact email)</small></label>
              <input id="blog_email" type="email"
                class="form-control @error('blog_email') is-invalid @enderror"
                name="blog_email" value="{{ old('blog_email') }}" required 
                autocomplete="email" placeholder="e.g. emmyblog.contact@gmail.com" autofocus>
              @error('blog_email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="blog_phone" class="col-form-label"><span class="required">*</span>Blog Phone <small>(your website's contact phone)</small></label>
              <input id="blog_phone" type="text" 
                class="form-control @error('blog_phone') is-invalid @enderror" 
                name="blog_phone" value="{{ old('blog_phone') }}" required 
                autocomplete="phone" placeholder="+234-901-2345-678" autofocus>
              @error('blog_phone')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="blog_address" class="col-form-label">Blog address <small>(your website's contact address, will be soon on the footer section)</small></label>
              <textarea id="blog_address" 
                class="form-control @error('blog_address') is-invalid @enderror"
                name="blog_address" value="{{ old('blog_address') }}" 
                autocomplete="address" placeholder="e.g No. 8, Somewhere in-Life road."
                autofocus></textarea>
              @error('blog_address')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="blog_logo" class="col-form-label">Company Logo <small>(This logo will be shown to your readers)</small> </label>
              <input type="file" 
                accept=".png,.jpng,.jpg" class="form-control @error('blog_logo') is-invalid @enderror"
                name="blog_logo" autocomplete="blog_logo" autofocus>
              @error('blog_logo')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <h4 class="mt-5">Admin User Detail </h4>
            <p class="mb-3">A super user login details to access the portal)</p>
            <hr>

            <div class="form-group">
              <label for="name" class="col-form-label">{{ __('Admin Name') }}</label>
              <input id="name" type="text" placeholder="e.g Emmy Desina" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>
              <input id="email" type="email" placeholder="youremail@gmail.com"
                class="form-control @error('email') is-invalid @enderror" 
                name="email" value="{{ old('email') }}" required autocomplete="email">
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="password" class="col-form-label">{{ __('Password') }}</label>
              <input id="password" type="password" placeholder="*********" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="password-confirm" class="col-form-label">{{ __('Confirm Password') }}</label>
              <input id="password-confirm" placeholder="*********" type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" required autocomplete="new-password">
              @error('password_confirmation')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12">
              <button type="submit" class="btn btn-info btn-block btn-rounded waves-effect waves-light">
                {{ __('Save and Proceed') }}
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <footer class="footer text-center">© {{date('Y')}} .</footer>

  <script src="{{asset('admin/node_modules/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="{{asset('admin/node_modules/bootstrap/js/popper.min.js')}}"></script>
  <script src="{{asset('admin/node_modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <!--Wave Effects -->
  <script src="{{asset('admin/js/waves.js')}}"></script>
</body>

</html>