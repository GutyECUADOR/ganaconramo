@extends('layouts.page')

@section('content')

    <div class="main-container" style="background-image:  linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('/img/fondo2.jpg'); background-size: cover; height: 100%;">

      <section class="space-sm">
        <div class="container align-self-start">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-7">
              <div class="card card-lg text-center border-0">
                <div style="background: #266fbf;">
                  <img alt="Image" src="{{ asset('img/logo.png') }}" style="width: 50%;"/>
                </div>
                
                <div class="card-body">
                  <div class="mb-2">
                    <h1 class="h2 mb-2">Hola!</h1>
                    <span>Ingresa a tu cuenta y revisa tus puntos</span>
                  </div>
                  <div class="row no-gutters justify-content-center">
                    <form method="POST" action="{{ route('login') }}" class="text-left col-lg-8">
                      @csrf
                      <div class="form-group">
                        <label for="dni">{{ __('dni') }}</label>
                        <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autofocus>
                          @error('dni')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="password">{{ __('phone') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        
                          @if (Route::has('password.request'))
                              <a class="small" href="{{ route('password.request') }}">
                                  {{ __('Forgot Your Password?') }}
                              </a>
                          @endif
                      </div>
                      <div>
                        <div class="custom-control custom-checkbox align-items-center">
                          <input type="checkbox" class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                          <label class="custom-control-label text-small" for="remember"> {{ __('Remember Me') }}</label>
                        </div>
                      </div>
                      <div class="text-center mt-3">
                        <button type="submit" class="btn btn-lg btn-primary"> {{ __('Login') }}</button>
                      </div>
                    </form>
                  </div>
                  <!--end of row-->
                </div>
              </div>
              <div class="text-center">
                <span class="text-small text-white">Aun no te has registrado? <a class="text-yellow" href="#">Registrate aquí</a>
                </span>
              </div>
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->
    </div>


@endsection
