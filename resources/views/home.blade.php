@extends('layouts.page')

@section('content')

    <div class="main-container" style="background-image: url('/img/fondo2.jpg'); background-size: cover; height: 100%;">
      <section >
        <div class="container">
          <div class="row flex-md-row card card-lg border-0">
            <div class="col-12 col-md-4 card-body text-center text-light" style="background:#266fbf">
              <img alt="Image" src="{{ asset('img/avatar-female-1.jpg') }}" class="mb-3 avatar avatar-xlg" />
              <div class="media">
                
                <div class="media-body">
                  <div class="mb-3">
                    <h1 class="h2 mb-2">MARÍA DANIELACUERVO APARICIO</h1>
                    <span class="text-muted">1032421643</span>

                    <span class="h5 mt-2">Mi cuenta</span>
                    <span class="h5 mt-2">Cómo participar</span>
                    <span class="h5 mt-2">Premios</span>
                    <span class="h5 mt-2">Términos y Condiciones</span>
                    <a class="h5 mt-2" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                  </div>
                  
                  <div>
                  </div>
                </div>
              </div>
            </div>
            <!--end of col-->
            <div class="col-12 col-md-8 card-body">
              <div>
                <div class="text-center">
                  <h3 class="h3 text-left">Mis Puntos</h3>
                  <img alt="Image" src="{{ asset('img/corazon.png') }}" style="width: 40%;"/>
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