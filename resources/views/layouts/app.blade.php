<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Uyodev') }}</title>

    <!-- Styles -->
    <link  rel="stylesheet" href="http://localhost/uyodev/public/css/bootstrap.min.css">
    <link  rel="stylesheet" href="http://localhost/uyodev/public/css/style.css">
    <link  rel="stylesheet" href="http://localhost/uyodev/public/css/font-awesome.min.css">
    <link href="{{ asset('css/ap.css') }}" rel="stylesheet">
</head>
<body>

      <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color:#fff;">
        <div class="container">
<a class="navbar-brand" href="{{ route('home.index') }}" style="color:#1de9b6;font-weight:bold;">UyoDev <span style="background-color:red;color:#fff;font-size:14px;">Demo</span></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav ml-auto">

  @guest
  <li class="nav-item">
    <a class="nav-link" href="{{ url('about') }}">ABOUT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{ route('login') }}" >LOGIN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link btn btn-outline-info" href="{{ route('register') }}" role="button">JOIN NOW</a>
  </li>
  @else
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Auth::user()->firstname." ".Auth::user()->lastname }}
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                  Logout</a>
                                  <a class="dropdown-item" href="{{ route('profile.index') }}">
                                                            My Profile</a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
      </div>
    </li>
  @endguest
  </ul>
</div>
</div>
</nav>

        @yield('content')

    <footer class="footer">
      <div class="container">
        <span class="text-muted ml-auto">Made with <i class="fa fa-heart" aria-hidden="true" style="color:#e91e63;"></i> in Uyo by <a href="https://evidenze.github.io" target="-_blank">Team Evidenze</a></span>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="http://localhost/uyodev/public/js/jquery-3.2.1.slim.min.js"></script>
    <script src="http://localhost/uyodev/public/js/popper.min.js"></script>
    <script src="http://localhost/uyodev/public/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
