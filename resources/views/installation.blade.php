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
  <title>Installation</title>
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
  <div class="preloader">
    <div class="lds-ellipsis">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <section id="main-wrapper" class="error-page">
    <div class="error-box">
      <div class="error-body text-center">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 ">
            <h2 class="my-5">Setup</h2>
            <h5>Welcome to <strong>{{config('app.name', 'Blog')}}</strong>.</h5>
            <p>
              Get started with the installation in simple steps. <br>
              You can read up the documentation <a href="{{route('documentations')}}" target="_blank">here</a>
              <br>
            </p>
            <form method="POST" action="{{ route('installation') }}">
              @csrf
              @if ($hd_c)
              <div class="form-group py-5">
                <button type="submit" name="action" value="create_database" class="btn btn-secondary btn-block btn-lg btn-rounded waves-effect waves-light">
                  Create Database
                  <!-- <i class="fa fa-check-circle-o"></i> -->
                </button>
              </div>
              @endif
              @if (!$hd_c && !$hm_)
              <div class="form-group py-5">
                <button type="submit" name="action" value="migrations" class="btn btn-info btn-block btn-lg btn-rounded waves-effect waves-light">
                  Run Migrations
                  <!-- <i class="fa fa-check-circle-o"></i> -->
                </button>
              </div>
              @endif
              @if ($hm_)
              <div class="form-group py-5">
                <button type="submit" name="action" value="finish" class="btn btn-primary btn-block btn-lg btn-rounded waves-effect waves-light">
                  Finish up
                </button>
              </div>
              @endif
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
  <script src="{{asset('admin/js/custom.min.js')}}"></script>
</body>
</html>