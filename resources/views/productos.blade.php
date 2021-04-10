@extends('layouts.inner')

@section("content-title", "Nuestros Productos")

@section('content')


<div class="container">
  <div class="row">
    <!--Grid column-->
    <div class="col-md-4 mb-4">

      <!-- Card -->
      <div class="">
        <div class="view overlay z-depth-2 rounded">
          <img class="img-fluid w-100" src="{{asset('images/productos/llantas.png')}}" alt="Sample">
          <a href="#!">
            <div class="mask rgba-white-slight waves-effect waves-light"></div>
          </a>
        </div>

        <div class="text-center pt-4">

          <h5>Llantas de chapa</h5>
          <p>Descripcion Descripcion Descripcion Descripcion Descripcion Descripcion Descripcion Descripcion Descripcion
            Descripcion Descripcion Descripcion Descripcion Descripcion </p>

          <a class="btn btn-primary btn-rounded btn-sm mr-1 mb-2 waves-effect waves-light" href="/productos/llantas">ver
            mas</a>

        </div>

      </div>
      <!-- Card -->

    </div>
    <!--Grid column-->

    <div class="col-md-4 mb-4">

      <!-- Card -->
      <div class="">
        <div class="view overlay z-depth-2 rounded">
          <img class="img-fluid w-100" src="{{asset('images/productos/llantas.png')}}" alt="Sample">
          <a href="#!">
            <div class="mask rgba-white-slight waves-effect waves-light"></div>
          </a>
        </div>

        <div class="text-center pt-4">

          <h5>Cubiertas</h5>
          <p>Descripcion Descripcion Descripcion Descripcion Descripcion Descripcion Descripcion Descripcion Descripcion
            Descripcion Descripcion Descripcion Descripcion Descripcion </p>

          <a class="btn btn-primary btn-rounded btn-sm mr-1 mb-2 waves-effect waves-light" href="/productos/llantas">ver
            mas</a>

        </div>

      </div>
      <!-- Card -->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-4 mb-4">

      <!-- Card -->
      <div class="">
        <div class="view overlay z-depth-2 rounded">
          <img class="img-fluid w-100" src="{{asset('images/productos/llantas.png')}}" alt="Sample">
          <a href="#!">
            <div class="mask rgba-white-slight waves-effect waves-light"></div>
          </a>
        </div>

        <div class="text-center pt-4">

          <h5>Llantas de chapa</h5>
          <p>Descripcion Descripcion Descripcion Descripcion Descripcion Descripcion Descripcion Descripcion Descripcion
            Descripcion Descripcion Descripcion Descripcion Descripcion </p>

          <a class="btn btn-primary btn-rounded btn-sm mr-1 mb-2 waves-effect waves-light" href="/productos/llantas">ver
            mas</a>

        </div>

      </div>
      <!-- Card -->

    </div>
    <!--Grid column-->
  </div>
</div>
@endsection