
<header id="header" class="navbar navbar-expand-lg navbar-end navbar-light bg-white">
  <div class="container">
    <nav class="js-mega-menu navbar-nav-wrap">
      <!-- Default Logo -->
      <a class="navbar-brand" href="../index.html" aria-label="Front">
        <img class="navbar-brand-logo" src="../assets/svg/logos/logo.svg" alt="Logo">
      </a>
      <!-- End Default Logo -->

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-default">
          <i class="bi-list"></i>
        </span>
        <span class="navbar-toggler-toggled">
          <i class="bi-x"></i>
        </span>
      </button>
      <!-- End Toggler -->

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <!-- Landings -->
          <li class="nav-item dropdown">
            <a id="landingsMegaMenu" class="nav-link dropdown-toggle " aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Landings</a>
          </li>
          <!-- End Landings -->

          <!-- Account -->
          <li class="nav-item dropdown">
            <a id="accountMegaMenu" class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
          </li>

          @if (Route::has('login') && Auth::check())
        <a href="{{route('dashboard')}}" class="text-light btn btn-dark btn-transition"> Dashboard</a>
      @elseif (Route::has('login') && !Auth::check())
        <a href="{{route('login')}}" class="m-3 text-dark"> Login</a>
      @endif
        </ul>
      </div>
      <!-- End Collapse -->
    </nav>
  </div>
</header>