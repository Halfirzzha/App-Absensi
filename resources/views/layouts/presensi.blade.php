<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Affan - PWA Mobile HTML Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#0134d4">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Title -->
  <title>Dashboard - Office Attendance</title>

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
  <link rel="apple-touch-icon" href="{{ asset('img/icons/icon-96x96.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/icons/icon-152x152.png') }}">
  <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('img/icons/icon-167x167.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icons/icon-180x180.png') }}">

  <!-- Style CSS -->
  <link rel="stylesheet" href="{{ asset('style.css') }}">

  <!-- Web App Manifest -->
  <link rel="manifest" href="{{ asset('manifest.json') }}">
</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="spinner-grow text-primary" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  <!-- Internet Connection Status -->
  <div class="internet-connection-status" id="internetStatus"></div>

  <!-- Header Area -->
  <div class="header-area" id="headerArea">
    <div class="container">
      <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
        <div class="logo-wrapper">
          <a href="home.html">
            <img src="{{ asset('img/core-img/logo.png') }}" alt="">
          </a>
        </div>
        <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas" data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas">
          <span class="d-block"></span>
          <span class="d-block"></span>
          <span class="d-block"></span>
        </div>
      </div>
    </div>
  </div>

  <!-- Sidenav Left -->
  <div class="offcanvas offcanvas-start" id="affanOffcanvas" data-bs-scroll="true" tabindex="-1" aria-labelledby="affanOffcanvsLabel">
    <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <div class="offcanvas-body p-0">
      <div class="sidenav-wrapper">
        <div class="sidenav-profile bg-gradient">
          <div class="sidenav-style1"></div>
          <div class="user-profile">
            <img src="{{ asset('img/bg-img/2.jpg') }}" alt="">
          </div>
          <div class="user-info">
            <h6 class="user-name mb-0">M'HALFIRZZHATULLAH</h6>
            <span>CEO & Software Enginner</span>
          </div>
        </div>
        <ul class="sidenav-nav ps-0">
          <li><a href="home.html"><i class="bi bi-person-badge"></i> Profil</a></li>
          <li><a href="elements.html"><i class="bi bi-calendar2-date"></i> Cuti</a></li>
          <li><a href="settings.html"><i class="bi bi-geo-alt-fill"></i> Lokasi</a></li>
          <li><a href="pages.html"><i class="bi bi-clock-history"></i> History</a></li>
          <li>
            <a href="#"><i class="bi bi-cart-check"></i> Shop</a>
            <ul>
              <li><a href="shop-grid.html">Shop Grid</a></li>
              <li><a href="shop-list.html">Shop List</a></li>
              <li><a href="shop-details.html">Shop Details</a></li>
              <li><a href="cart.html">Cart</a></li>
              <li><a href="checkout.html">Checkout</a></li>
            </ul>
          </li>
          <li>
            <div class="night-mode-nav">
              <i class="bi bi-moon"></i> Night Mode
              <div class="form-check form-switch">
                <input class="form-check-input form-check-success" id="darkSwitch" type="checkbox">
              </div>
            </div>
          </li>
          <li><a href="/processlogout"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
        </ul>
        <div class="social-info-wrap">
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-twitter"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
        </div>
        <div class="copyright-info">
          <p><span id="copyrightYear"></span> &copy; Made by <a href="#">Designing World</a></p>
        </div>
      </div>
    </div>
  </div>

  @yield('header')
  <div class="page-content-wrapper">
    <!-- Welcome Toast -->
    @yield('toast')
    <!-- End Welcome Toast -->

    <!-- Untuk Konten Utama Dibawah Ini -->
    <div class="pb-4"></div>

    @yield('content')

    <div class="pb-4"></div>
  </div>
    <!-- End Konten Utama -->

    @include('layouts.footernav')
    @include('layouts.script')
</body>

</html>
