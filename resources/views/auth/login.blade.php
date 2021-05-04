@extends('user.layouts.app')

@section('content')

<!-- CONTENT
    ================================================== -->
    <section >
        <div class="container d-flex flex-column">
          <div class="row align-items-center justify-content-center no-gutters min-vh-100">
            <div class="col-8 col-md-6 col-lg-7 offset-md-1 order-md-2 mt-auto mt-md-0 pt-8 pb-4 py-md-11">
  
              <!-- Image -->
              <img src="{{ asset('user/img/illustrations/illustration-2.png') }}" alt="..." class="img-fluid">
  
            </div>
            <div class="col-12 col-md-5 col-lg-4 order-md-1 mb-auto mb-md-0 pb-8 py-md-11">
              
              <!-- Heading -->
              <h1 class="mb-0 font-weight-bold text-center">
                Masuk
              </h1>
  
              <!-- Text -->
              <p class="mb-6 text-center text-muted">
                Silahkan masuk untuk mencari / memberi job
              </p>
  
              <!-- Form -->
              <form class="mb-6" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="username" class="">{{ __('Username') }}</label>
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="">{{ __('Password') }}</label>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                </div>

                <div class="form-group mb-0">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                </div>
  
              </form>
  
              <!-- Text -->
              <p class="mb-0 font-size-sm text-center text-muted">
                Belum punya akun? <a href="'/register'">Daftar</a>.
              </p>
  
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section>
@endsection
