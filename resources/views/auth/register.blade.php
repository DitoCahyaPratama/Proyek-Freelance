@extends('user.layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- CONTENT
    ================================================== -->
    <section>
        <div class="container d-flex flex-column">
            <div class="row align-items-center justify-content-center no-gutters min-vh-100">
                <div class="col-6 col-md-4 col-lg-4 offset-md-1 order-md-2 mt-auto mt-md-0 pt-8 pb-4 py-md-11">
    
                    <!-- Image -->
                    <img src="{{ asset('user/img/illustrations/illustration-8.png') }}" alt="..." class="img-fluid">
    
                </div>
                <div class="col-12 col-md-8 col-lg-7 order-md-1 mb-auto mb-md-0 pb-8 py-md-11">
                    <!-- Heading -->
                    <h1 class="mb-0 font-weight-bold text-center">
                        Daftar
                    </h1>
    
                    <!-- Text -->
                    <p class="mb-6 text-center text-muted">
                        Ayo daftar sekarang!
                    </p>

                    <!-- Form -->
                    <form class="mb-6 row" action="../backend/user/register.php" method="POST" enctype="multipart/form-data">
                        <div class="col-md-6 col-sm-12">
                            <!-- Photo -->
                            <div class="form-group">
                                <label for="avatar">
                                    Foto anda
                                </label>
                                <input type="file" class="form-control" id="avatar" name="avatar" required>
                            </div>
    
                            <!-- Email -->
                            <div class="form-group">
                                <label for="email">
                                    Alamat Email
                                </label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="namaemail@contoh.com" required>
                            </div>
    
                            <!-- Username -->
                            <div class="form-group mb-5">
                                <label for="username">
                                    Username
                                </label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username anda" required>
                            </div>
    
                            <!-- Password -->
                            <div class="form-group mb-5">
                                <label for="password">
                                    Password
                                </label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                            </div>
                        </div>
    
                        <div class="col-md-6 col-sm-12">
                            <!-- Name -->
                            <div class="form-group">
                                <label for="name">
                                    Nama Anda
                                </label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama anda" required>
                            </div>
    
                            <!-- Description -->
                            <div class="form-group mb-5">
                                <label for="description">
                                    Deskripsi
                                </label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="1" required></textarea>
                            </div>
    
                            <!-- Role -->
                            <div class="form-group mb-5">
                                <label for="role">
                                    Daftar sebagai
                                </label>
                                <select class="form-control" name="role">
                                    <option value="2">1. Pencari Freelance</option>
                                    <option value="3">2. Freelance</option>
                                </select>
                            </div>
                        </div>
    
                        <!-- Submit -->
                        <button class="btn btn-block btn-primary" type="submit" name="submit">
                            Daftar
                        </button>
    
                    </form>
    
                    <!-- Text -->
                    <p class="mb-0 font-size-sm text-center text-muted">
                        Sudah punya akun ? <a href="/login">Masuk</a>.
                    </p>
    
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
@endsection
