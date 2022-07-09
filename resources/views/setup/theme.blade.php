<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the ser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/images/favicon.png')}}">
  
  <title>
    @yield('title')
  </title>

  <link href="{{asset('admin/node_modules/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('admin/css/colors/default.css')}}" id="theme" rel="stylesheet">
</head>

<body class="card-no-border">
  <div class="preloader">
    <div class="lds-ellipsis">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  @yield('content')
  <footer class="footer text-center">© {{date('Y')}} .</footer>

  <script src="{{asset('admin/node_modules/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="{{asset('admin/node_modules/bootstrap/js/popper.min.js')}}"></script>
  <script src="{{asset('admin/node_modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <!--Wave Effects -->
  <script src="{{asset('admin/js/waves.js')}}"></script>
  <script src="{{asset('admin/js/custom.min.js')}}"></script>
</body>

</html>