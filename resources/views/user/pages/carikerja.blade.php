@extends('user.layouts.app')

@section('content')
    <!-- BREADCRUMB
    ================================================== -->
    <nav class="bg-gray-200">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Breadcrumb -->
                    <ol class="breadcrumb breadcrumb-scroll">
                        <li class="breadcrumb-item">
                            <a href="/kerja">
                                Kerja
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Cari Kerja
                        </li>
                    </ol>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </nav>

    <!-- SEARCH
        ================================================== -->
    <section class="py-6">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Form -->
                    <form class="rounded shadow" action="/carikerja" method="POST">
                        <div class="input-group input-group-lg">

                            <!-- Prepend -->
                            <div class="input-group-prepend">
                    <span class="input-group-text border-0 pr-1">
                      <i class="fe fe-search"></i>
                    </span>
                            </div>

                            <!-- Input -->
                            <input type="text" name="keyword" class="form-control border-0 px-1"
                                   aria-label="Cari kerjaan ..." placeholder="Cari kerjaan...">

                            <!-- Append -->
                            <div class="input-group-append">
                    <span class="input-group-text border-0 py-0 pl-1 pr-3">

                      <!-- Text -->
                      <span class="h6 text-uppercase text-muted d-none d-md-block mb-0 mr-5">

                      </span>

                        <!-- Button -->
                      <button type="submit" name="search" class="btn btn-sm btn-primary">
                        Cari
                      </button>

                    </span>
                            </div>

                        </div>
                    </form>

                </div>
            </div> <!-- / .row -->
            <?php
            if (isset($_SESSION['msgNotif'])) {
                showMessage($_SESSION['msgNotif']);
            }
            ?>
        </div>
    </section>

    <!-- ARTICLES
        ================================================== -->
    <section>
        <div class="container">
            <div class="row">
                @if(!empty($job))
                    @if(isset($_POST['search']))

                    @endif
                    @foreach($job as $datas)
                        <div class="col-12 col-md-6 col-lg-4 d-flex">
                            <!-- Card -->
                            <div class="card mb-6 shadow-light-lg lift lift-lg">

                                <!-- Image -->
                                <a class="card-img-top" href="#!">

                                    <!-- Image -->
                                    <img src="{{ asset('user/img/covers/cover-12.jpg') }}" alt="..." class="card-img-top">

                                    <!-- Shape -->
                                    <div class="position-relative">
                                        <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                                            <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z"
                                                      fill="currentColor"/>
                                            </svg>
                                        </div>
                                    </div>

                                </a>

                                <!-- Body -->
                                <a class="card-body" href="#!">

                                    <!-- Heading -->
                                    <h3>
                                        {{ $datas['name'] }}
                                    </h3>

                                    <!-- Text -->
                                    <p class="mb-0 text-muted">
                                        {{ $datas['description'] }}
                                    </p>

                                </a>

                                <!-- Meta -->
                                <a class="card-meta mt-auto" href="#!">

                                    <!-- Divider -->
                                    <hr class="card-meta-divider">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm mr-2">
                                        <img src="../backend/public/img/{{ $datas['avatarAuthor'] }}" alt="..."
                                             class="avatar-img rounded-circle">
                                    </div>

                                    <!-- Author -->
                                    <h6 class="text-uppercase text-muted mr-2 mb-0">
                                        {{ $datas['nameUser'] }}
                                    </h6>

                                    <!-- Date -->
                                    <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                                        <time>{{ $datas['date_publish'] }} - {{ $datas['date_expired'] }}</time>
                                    </p>

                                </a>

                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center">
                        <p>Pekerjaan tidak ada</p>
                    </div>
                @endif
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- SHAPE
        ================================================== -->
    <div class="position-relative">
        <div class="shape shape-bottom shape-fluid-x svg-shim text-gray-200">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/>
            </svg>
        </div>
    </div>
@endsection
