<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Affan - PWA Mobile HTML Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <meta name="theme-color" content="#0134d4">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <!-- Title -->
  <title>Auth - Office Attendance</title>

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

  <!-- Login Wrapper Area -->
  <div class="login-wrapper d-flex align-items-center justify-content-center">
    <div class="custom-container">
        <div class="text-center px-4">
        <img class="login-intro-img" src="{{ asset('img/HDev-img/login.gif') }}" alt="">
      </div>

      <!-- Register Form -->
      <div class="register-form mt-4">
        @if (session('error'))
            <div class="toast toast-autohide custom-toast-1 mb-2" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="8000" data-bs-autohide="true">
                <div class="toast-body">
                    <div class="toast-text ms-3 me-2">
                        <p class="mb-0">{{ session('error') }}</p>
                    </div>
                </div>
            </div>
        @endif
        <h6 class="mb-3 text-center">Log in to proceed to Attendance page.</h6>

        <form action="{{ url('/processlogin') }}" method="POST">
            @csrf
            <div class="form-group">
                <input class="form-control" type="text" name="nik" id="nik" placeholder="Nomor Induk Karyawan ( NIK )" maxlength="10" required oninput="validateNIK(this)">
            </div>

            <div class="form-group position-relative">
                <input class="form-control" id="password" name="password" type="password" placeholder="Masukan Password" required>
                <div class="position-absolute" id="password-visibility">
                    <i class="bi bi-eye"></i>
                    <i class="bi bi-eye-slash"></i>
                </div>
            </div>

            <button class="btn btn-primary w-100" type="submit">Sign In</button>
        </form>
    </div>


      <!-- Login Meta -->
      <div class="login-meta-data text-center">
        <a class="stretched-link forgot-password d-block mt-3 mb-1" href="forget-password.html">Forgot
          Password?</a>
      </div>
    </div>
  </div>

  <!-- All JavaScript Files -->
  <script src="{{ asset('js/vanilla-dataTables.min.js') }}"></script>
  <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('js/rangeslider.min.js') }}"></script>
  <script src="{{ asset('js/slideToggle.min.js') }}"></script>
  <script src="{{ asset('js/internet-status.js') }}"></script>
  <script src="{{ asset('js/tiny-slider.js') }}"></script>
  <script src="{{ asset('js/venobox.min.js') }}"></script>
  <script src="{{ asset('js/countdown.js') }}"></script>
  <script src="{{ asset('js/dark-rtl.js') }}"></script>
  <script src="{{ asset('js/active.js') }}"></script>
  <script src="{{ asset('js/index.js') }}"></script>
  <script src="{{ asset('js/login.js') }}"></script>
  <script src="{{ asset('js/pwa.js') }}"></script>
</body>

</html>
