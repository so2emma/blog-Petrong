<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/images/favicon.png')}}">
    <title>{{'Welcome to Admin'  }}</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('admin/node_modules/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <!-- page css -->
    <link href="{{asset('admin/css/pages/error-pages.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('admin/css/colors/default.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="error-page">
        <div class="error-box">
            <div class="error-body text-center">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 ">
                        <h2 class="my-5">Admin Login</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-group">
                                <div class>
                                    <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group">
                                <input id="password" name="password" placeholder="{{ __('Password') }}" type="password" class="form-control @error('password') is-invalid @enderror"  required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
    
                            <div class="form-group mb-2">
                                
                                <button type="submit" class="btn btn-info btn-block btn-rounded waves-effect waves-light">
                                    {{ __('Login') }}
                                </button>
                                
                            </div>
                            <div class="form-group mb-2 p-3">
                                
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                
                            </div> 
                        </form>
                    </div>
                    
                    
                </div>
                    
            <footer class="footer text-center">© {{ date('Y') }} Petrong Software Solutions.</footer>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('admin/node_modules/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('admin/node_modules/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/node_modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('admin/js/waves.js')}}"></script>
</body>

</html>