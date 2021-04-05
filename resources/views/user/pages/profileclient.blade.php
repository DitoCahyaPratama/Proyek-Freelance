@extends('user.layouts.app')

@section('content')
<!-- BREADCRUMB
    ================================================== -->
    <nav class="bg-dark d-md-none">
      <div class="container-md">
        <div class="row align-items-center">
          <div class="col">
  
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <span class="text-white">
                  Profil
                </span>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <span class="text-white">
                  saya
                </span>
              </li>
            </ol>
  
          </div>
          <div class="col-auto">
  
            <!-- Toggler -->
            <div class="navbar-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenavCollapse" aria-controls="sidenavCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
  
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </nav>
  
    <!-- HEADER
      ================================================== -->
    <header class="bg-dark pt-9 pb-11 d-none d-md-block">
      <div class="container-md">
        <div class="row align-items-center">
          <div class="col">
  
            <!-- Heading -->
            <h1 class="font-weight-bold text-white mb-2">
              Profil saya
            </h1>
  
            <!-- Text -->
            <p class="font-size-lg text-white-75 mb-0">
              email : <a class="text-reset"></a>
            </p>
  
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </header>
  
    <!-- MAIN
      ================================================== -->
    <main class="pb-8 pb-md-11 mt-md-n6">
      <div class="container-md">
        <div class="row">
          <div class="col-12 col-md-3">
  
            <!-- Card -->
            <div class="card card-bleed border-bottom border-bottom-md-0 shadow-light-lg">
  
              <!-- Collapse -->
              <div class="collapse d-md-block" id="sidenavCollapse">
                <div class="card-body">
  
                  <!-- Heading -->
                  <h6 class="font-weight-bold text-uppercase mb-3">
                    Akun
                  </h6>
  
                  <!-- List -->
                  <ul class="card-list list text-gray-700 mb-6">
                    <li class="list-item">
                      <a class="list-link text-reset" href="/profil">
                        Umum
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
  
            </div>
  
          </div>
          <div class="col-12 col-md-9">
  
            <!-- Card -->
            <div class="card card-bleed shadow-light-lg">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
  
                    <!-- Heading -->
                    <h4 class="mb-0">
                      Your Profile
                    </h4>
  
                  </div>
                  <div class="col-auto">
                    <form action="/profil" method="POST">
                      <button name="edit" class="btn btn-warning btn-xs m-1"><i class="fe fe-edit"></i></button>
                    </form>
                    <!-- Button -->
                  </div>
                </div>
              </div>
              <div class="card-body">

              </div>
            </div>
  
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </main>
@endsection