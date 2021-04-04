<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="/">
            <b class="text-primary">Freelancers</b>
        </a>
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fe fe-x"></i>
            </button>

            <!-- Navigation -->
            <ul class="navbar-nav ml-auto">
        
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarLandings" data-toggle="dropdown" href="#"
                        aria-haspopup="true" aria-expanded="false">
                        Fitur Kami
                    </a>
                    <div class="dropdown-menu dropdown-menu-xl p-0" aria-labelledby="navbarLandings">
                        <div class="row no-gutters">
                            <div class="col-12 col-lg-12">
                                <div class="dropdown-body">
                                    <div class="row no-gutters">
                                        <div class="col-6">

                                            <!-- Heading -->
                                            <h6 class="dropdown-header">
                                                Pelayanan
                                            </h6>

                                            <!-- List -->
                                            <a class="dropdown-item"
                                                href="/proyek">
                                                Cari Projek
                                            </a>

                                            <a class="dropdown-item mb-5"
                                                href="/kerja">
                                                Cari Kerja
                                            </a>
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </li>

                @guest
                <li class="nav-item">
                    <a class="nav-link" href="/tentang">
                        Tentang Kami
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kontak">
                        Kontak
                    </a>
                </li>
                @endguest

                {{-- @role('pKaryawan')
                    <li class="nav-item">
                        <a class="nav-link" href="<?php route('/projeksaya'); ?>">
                            Projek Saya
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php route('/profil'); ?>">
                            Profil Saya
                        </a>
                    </li>
                @endrole --}}

                {{-- @role('pKerja')
                    <li class="nav-item">
                        <a class="nav-link" href="/jobsaya">
                            Kerja
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/projeksaya">
                            Projek
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profil">
                            Profil Saya
                        </a>
                    </li>
                @endrole --}}

            </ul>

            @auth
                <a class="navbar-btn btn btn-sm btn-outline-danger lift ml-2" href="{{ route('logout') }}">
                    Keluar
                </a>
            @endauth
            
            @guest
                <!-- Button -->
                <a class="navbar-btn btn btn-sm btn-primary lift ml-auto"
                    href="{{ route('register') }}">
                    Daftar Sekarang
                </a>

                <a class="navbar-btn btn btn-sm btn-outline-primary lift ml-2"
                    href="{{ route('login') }}">
                    Masuk
                </a>
            @endguest
        </div>
    </div>
</nav>
