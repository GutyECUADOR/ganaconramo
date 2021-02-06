@extends('layouts.page')

@section('content')

    <div class="main-container" style="background-image:  linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/fondo3.jpg') }}'); background-size: cover; height: 100%;">
      <section >
        <div class="container">
          <div class="row flex-md-row card card-lg">
            <div class="col-12 col-md-7 card-body bg-secondary">
              <div class="text-center mb-1">
                <h1 class="h2 mb-2">REGÍSTRATE AHORA</h1>
                <span>Ingresa tus datos para acceder a la plataforma</span>
              </div>
              <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                  <form method="POST" action="{{ route('register') }}" novalidate>
                    @csrf
                    <!-- Nombre -->
                    <div class="form-group row">
                        <div class="col">
                            <label for="nombre" class="form-label">{{ __('Name') }}</label>
                            <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Fin -->

                    <!-- DNI -->
                    <div class="form-group row">
                        <div class="col">
                            <label for="dni" class="form-label">{{ __('dni') }}</label>
                            <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required>

                            @error('dni')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Fin -->

                    <!-- DNI Confirm -->
                    <div class="form-group row">
                        <div class="col">
                            <label for="dni_confirmation" class="form-label">{{ __('Confirm dni') }}</label>
                            <input id="dni_confirmation" type="text" class="form-control @error('dni_confirmation') is-invalid @enderror" name="dni_confirmation" value="{{ old('dni_confirmation') }}" required>

                            @error('dni_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Fin -->

                    <!-- Phone -->
                    <div class="form-group row">
                        <div class="col">
                            <label for="telefono" class="form-label">{{ __('phone') }}</label>
                            <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required>

                            @error('telefono')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Fin -->

                    <!-- Phone Confirm -->
                    <div class="form-group row">
                        <div class="col">
                            <label for="telefono_confirmation" class="form-label">{{ __('Confirm phone') }}</label>
                            <input id="telefono_confirmation" type="text" class="form-control @error('telefono_confirmation') is-invalid @enderror" name="telefono_confirmation" value="{{ old('telefono_confirmation') }}" required>

                            @error('telefono_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Fin -->

                    <!-- Email -->
                    <div class="form-group row">
                        <div class="col">
                            <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Fin -->

                    <div class="form-row form-group">
                      <div class="col">
                        <button class="btn btn-block btn-success btn-lg" type="submit"> {{ __('Register') }}</button>
                      </div>
                    </div>
                    <div class="text-center">
                        <span class="text-small">Ya tienes una cuenta? <a href="{{ route('login') }}">Click Aqui</a>
                        </span>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!--end of col-->
            <div class="col-12 col-md-5 card-body">
              <div>
                <div class="text-center">
                  <h3 class="h2 mb-2">Términos &amp; Condiciones</h3>
                  <span>Al registrarte aceptas todos los términos.</span>
                  <img alt="Image" src="{{ asset('img/logo.png') }}" style="width: 50%;"/>
                </div>
               
                <div class="card card-sm shadow text-justify">
                  <div class="card-body p-4 terms-box">
                    <span>
                     Promoción – Amigo Cervecero

                        CUMPLIMIENTO PUBLICIDAD COMERCIAL CON INCENTIVOS – INFORMACIÓN AL CONSUMIDOR

                        I. IDENTIFICACIÓN DE LA MARCA O PRODUCTO

                        Aplica para la categoría Cervezas de las marcas comercializadas

                        II. IDENTIFICACIÓN DEL INCENTIVO QUE SE OFRECE INDICANDO SU CANTIDAD Y CALIDAD

                        HASTA 4 CODIGOS PARA PARTICIPAR EN LA TRIVIA CERVECERA POR CUMPLIMIENTO DE LAS METAS DE VOLUMEN Y RETOS MAESTRÍA E INNOVACIÓN DEL MES)

                        III. ¿QUIEN PUEDE PARTICIPAR?

                        Representantes legales de clientes activos 

                        IV. MECÁNICA GENERAL DE LA ACTIVIDAD:

                        Cumple con los volúmenes y mix de acuerdo a las metas del Dashboard del programa , comunicado por tu representante Kopps, por este cumplimiento obtendrás 2 codigos.

                        Si lograr cumplir con el volumen y dentro de tus compras lograste comprar al menos 3 cajas en las variedades doradas, roja y negra de Club Colombia, obtendrás un código adicional.

                        Durante el mes se comunicara un producto de Innovacion para fortalecer el portafolio, este será comunicado por el representante de Kopps , si compras 10 cajas de este producto/Marca, lograras un código mas
                    </span>
                       
                  </div>
                </div>

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
