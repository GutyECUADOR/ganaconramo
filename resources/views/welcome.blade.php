@extends('layouts.page')

@section('content')

    <div class="main-container" style="background-image: url('/img/fondo3.jpg'); background-size: cover; height: 100%; background-repeat: no-repeat; ">
      <section class="fullwidth-split" >
        <div class="container-fluid">
          <div class="row no-gutters height-100">
            <div class="container">
                <div class="row justify-content-between align-items-center" style="margin-top:30%">
                    <div class="col-12 col-md-6 mb-8">
                    </div>
                    <!--end of col-->
                    <div class="col-12 col-lg-5 mb-4 text-center text-md-right text-light">
                        <h1 class="display-3">Bienvenido!</h1>
                        <h2 class="lead">Envia tus facturas por compras de Ramo, realizadas. <spam style="color:#ffeb00;">entre el 15 de febrero y el 15 de marzo al WhatsApp +3223542797</spam>. y acumula puntos para llevarte consolas o bonos.</h2>
                
                    <div>
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg border-0" style="background-color: #f2ce3e; color:black;"><i class="icon-login"></i> Ingresar</a>
                        <a href="{{ route('register') }}" class="btn btn-primary btn-lg border-0" style="background-color: #f2ce3e; color:black;">Registrarme</a>
                    </div>
                    </div>
                    <!--end of col-->
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
            
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->
    </div>


@endsection

