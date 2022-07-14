<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')</title>
  <meta content="Blog" name="description">
  <meta content="Blog" name="keywords">
  <link href="{{asset('frontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  @php
  $temp = \App\Models\Settings::template_is();
  @endphp

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  
  @include('layouts.'.$temp.'.vendor_before')

</head>
<body>
  @include('layouts.'.$temp.'.header')
  <main id="main">
    @yield('content')
  </main>
  @include('layouts.'.$temp.'.footer')
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  @include('layouts.'.$temp.'.vendor_after')
</body>
</html>