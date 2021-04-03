@extends('user.layouts.app')

@section('content')
    <!-- WELCOME
    ================================================== -->
<section class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover" style="background-image: url(/user/img/covers/cover-6.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">

                <!-- Heading -->
                <h1 class="display-2 font-weight-bold text-white">
                    Kami disini untuk membantu
                </h1>

                <!-- Text -->
                <p class="lead text-white-75 mb-0">
                    Kami selalu melihat email kami, sehingga respon anda selalu kami dengarkan
                </p>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- SHAPE
    ================================================== -->
<div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x svg-shim text-light">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" /></svg>
    </div>
</div>

<!-- INFO
    ================================================== -->
<section class="py-7 py-md-9 border-bottom border-gray-300" id="info">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">

                <!-- Button -->
                <a href="#info" class="btn btn-white btn-rounded-circle shadow mt-n11 mt-md-n13" data-toggle="smooth-scroll">
                    <i class="fe fe-arrow-down"></i>
                </a>

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-12 col-md-4 text-center border-right border-gray-300">

                <!-- Heading -->
                <h6 class="text-uppercase text-gray-700 mb-1">
                    Beri pesan ke kami
                </h6>

                <!-- Link -->
                <div class="mb-5 mb-md-0">
                    <a href="#!" class="h4 text-primary">
                        Mulai chat
                    </a>
                </div>

            </div>
            <div class="col-12 col-md-4 text-center border-right border-gray-300">

                <!-- Heading -->
                <h6 class="text-uppercase text-gray-700 mb-1">
                    Telepon setiap saat
                </h6>

                <!-- Link -->
                <div class="mb-5 mb-md-0">
                    <a href="#!" class="h4">
                        +62 89 777 787 627
                    </a>
                </div>

            </div>
            <div class="col-12 col-md-4 text-center">

                <!-- Heading -->
                <h6 class="text-uppercase text-gray-700 mb-1">
                    Email kami
                </h6>

                <!-- Link -->
                <a href="#!" class="h4">
                    support@freelancers.co
                </a>

            </div>
        </div> <!-- / .row -->
    </div>
</section>

<!-- FORM
    ================================================== -->
@endsection