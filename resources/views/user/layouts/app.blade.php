<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Libs CSS -->
  <link rel="stylesheet" href="{{ asset('user/fonts/Feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('user/libs/flickity-fade/flickity-fade.css') }}">
  <link rel="stylesheet" href="{{ asset('user/libs/flickity/dist/flickity.min.css') }}">

  <!-- Map -->

  <!-- Theme Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('user/css/theme.min.css') }}">

  <title>Freelancers</title>
</head>

<body>
    @include('user.includes.navbar')

    @yield('content')

    @include('user.includes.footer')
     <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="{{ asset('user/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('user/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/libs/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('user/libs/countup.js/dist/countUp.min.js') }}"></script>
    <script src="{{ asset('user/libs/flickity/dist/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('user/libs/flickity-fade/flickity-fade.js') }}"></script>
    <script src="{{ asset('user/libs/smooth-scroll/dist/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('user/libs/typed.js/lib/typed.min.js') }}"></script>
    <script src="{{ asset('user/libs/isotope-layout/dist/isotope.pkgd.min.js') }}"></script>

    <!-- Theme Bootstrap JS -->
    <script src="{{ asset('user/js/theme.min.js') }}"></script>


  </body>
</html>