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
                                Projek
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Projek Saya
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
                if (!empty($data)) {
                    foreach ($data as $datas) {
                        # code...
                        ?>
                        <div class="col-12 col-md-6 col-lg-4 d-flex">
                            <!-- Card -->
                            <div class="card mb-6 shadow-light-lg lift lift-lg">
    
                                <!-- Image -->
                                <a class="card-img-top" href="#!">
    
                                    <!-- Image -->
                                    <img src="../backend/public/img/<?= $datas['avatar'] ?>" alt="..." class="card-img-top">
    
                                    <!-- Shape -->
                                    <div class="position-relative">
                                        <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                                            <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor" /></svg>
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
                                        <img src="../backend/public/img/<?= $datas['avatarAuthor'] ?>" alt="..." class="avatar-img rounded-circle">
                                    </div>
    
                                    <!-- Author -->
                                    <h6 class="text-uppercase text-muted mr-2 mb-0">
                                        <?= $datas['nameUser'] ?>
                                    </h6>
    
                                    <!-- Date -->
                                    <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                                        <time><?= $datas['dateline'] ?> hari</time>
                                    </p>
    
                                </a>
    
                            </div>
    
    
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="col-12 text-center">
                        <p>Projek tidak ada</p>
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
                <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" /></svg>
        </div>
    </div>
@endsection