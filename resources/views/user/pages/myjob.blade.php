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
                            Kerja Saya
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
            <button class="btn btn-primary btn-sm mt-5" data-toggle="modal" data-target="#modalAdd">Tambah Pekerjaan
            </button>
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
                <?php
                if(!empty($data)){
                foreach ($data as $datas) {
                # code...
                ?>
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <!-- Card -->
                    <div class="card mb-6 shadow-light-lg lift lift-lg">

                        <!-- Image -->
                        <a class="card-img-top" href="#!">

                            <!-- Image -->
                            <img src="assets/img/covers/cover-12.jpg" alt="..." class="card-img-top">

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
                                <?= $datas['name'] ?>
                            </h3>

                            <!-- Text -->
                            <p class="mb-0 text-muted">
                                <?= $datas['description'] ?>
                            </p>

                        </a>

                        <!-- Meta -->
                        <a class="card-meta mt-auto" href="#!">

                            <!-- Divider -->
                            <hr class="card-meta-divider">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm mr-2">
                                <img src="../backend/public/img/<?= $datas['avatarUser'] ?>" alt="..."
                                     class="avatar-img rounded-circle">
                            </div>

                            <!-- Author -->
                            <h6 class="text-uppercase text-muted mr-2 mb-0">
                                <?= $datas['nameUser'] ?>
                            </h6>

                            <!-- Date -->
                            <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                                <time><?= $datas['date_publish'] ?> - <?= $datas['date_expired'] ?></time>
                            </p>

                        </a>

                    </div>
                </div>
                <?php
                }
                }else{
                ?>
                <div class="col-12 text-center">
                    <p>Pekerjaan tidak ada</p>
                </div>
                <?php
                }
                ?>
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

    <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalExampleTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <!-- Close -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                    <!-- Image -->
                    <div class="text-center">
                        <img src="{{asset('user/img/illustrations/illustration-1.png')}}" alt="..."
                             class="img-fluid mb-3" style="width: 200px;">
                    </div>

                    <!-- Heading -->
                    <h2 class="font-weight-bold text-center mb-1" id="modalExampleTitle">
                        Tambah Pekerjaan
                    </h2>

                    <!-- Text -->
                    <p class="font-size-lg text-center text-muted mb-6 mb-md-8">
                        Isikan data dengan baik dan benar
                    </p>

                    <!-- Form -->
                    <form action="/jobsaya/create" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6">

                                <!-- Username -->
                                <div class="form-label-group">
                                    <input type="text" class="form-control form-control-flush" id="name" name="name"
                                           placeholder="Nama Pekerjaan" required>
                                    <label for="name">Nama Pekerjaan</label>
                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- Username -->
                                <div class="form-label-group">
                                    <input type="date" class="form-control form-control-flush" id="date_expired"
                                           name="date_expired" placeholder="Tanggal Kadaluarsa" required>
                                    <label for="date_expired">Tanggal Kadaluarsa</label>
                                </div>

                            </div>
                            <div class="col-12 col-md-12">

                                <!-- Name -->
                                <div class="form-label-group">
                                    <textarea class="form-control form-control-flush" name="description" id="" cols="30"
                                              rows="1" required></textarea>
                                    <label for="description">Deskripsi</label>
                                </div>

                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12">

                                <!-- Submit -->
                                <button class="btn btn-block btn-primary mt-3 lift" type="submit" name="submit-client">
                                    Tambah Data
                                </button>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
