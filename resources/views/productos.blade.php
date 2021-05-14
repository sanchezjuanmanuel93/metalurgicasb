@extends('layouts.inner')
@section("content-title", "Nuestros Productos")
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="">
        <div class="view overlay z-depth-2 rounded"> <img class="img-fluid w-100"
            src="{{asset('images/index/productos/1.jpg')}}" alt="Sample"> <a href="#!">
            <div class="mask rgba-white-slight waves-effect waves-light"></div>
          </a> </div>
        <div class="text-center pt-4">
          <h5>Llantas de chapa</h5>
          <a class="btn btn-primary btn-rounded btn-sm mr-1 mb-2 waves-effect waves-light" href="{{url('/productos/llantas')}}">ver
            mas</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="">
        <div class="view overlay z-depth-2 rounded"> <img class="img-fluid w-100"
            src="{{asset('images/index/productos/2.jpg')}}" alt="Sample"> <a href="#!">
            <div class="mask rgba-white-slight waves-effect waves-light"></div>
          </a> </div>
        <div class="text-center pt-4">
          <h5>Ruedas Armadas</h5>
          <a class="btn btn-primary btn-rounded btn-sm mr-1 mb-2 waves-effect waves-light" href="{{url('/productos/ruedas')}}">ver
            mas</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="">
        <div class="view overlay z-depth-2 rounded"> <img class="img-fluid w-100"
            src="{{asset('images/index/productos/3.jpg')}}" alt="Sample"> <a href="#!">
            <div class="mask rgba-white-slight waves-effect waves-light"></div>
          </a> </div>
        <div class="text-center pt-4">
          <h5>Placas Plasticas</h5>
          <a class="btn btn-primary btn-rounded btn-sm mr-1 mb-2 waves-effect waves-light" href="{{url('/productos/placas')}}">ver
            mas</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="">
        <div class="view overlay z-depth-2 rounded"> <img class="img-fluid w-100"
            src="{{asset('images/index/productos/4.jpg')}}" alt="Sample"> <a href="#!">
            <div class="mask rgba-white-slight waves-effect waves-light"></div>
          </a> </div>
        <div class="text-center pt-4">
          <h5>Cubiertas</h5>
          <a class="btn btn-primary btn-rounded btn-sm mr-1 mb-2 waves-effect waves-light" href="{{url('/productos/cubiertas')}}">ver
            mas</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="">
        <div class="view overlay z-depth-2 rounded"> <img class="img-fluid w-100"
            src="{{asset('images/index/productos/5.jpg')}}" alt="Sample"> <a href="#!">
            <div class="mask rgba-white-slight waves-effect waves-light"></div>
          </a> </div>
        <div class="text-center pt-4">
          <h5>Fuelles</h5>
          <a class="btn btn-primary btn-rounded btn-sm mr-1 mb-2 waves-effect waves-light" href="{{url('/productos/fuelles')}}">ver
            mas</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="">
        <div class="view overlay z-depth-2 rounded"> <img class="img-fluid w-100"
            src="{{asset('images/index/productos/6.jpg')}}" alt="Sample"> <a href="#!">
            <div class="mask rgba-white-slight waves-effect waves-light"></div>
          </a> </div>
        <div class="text-center pt-4">
          <h5>Mazas</h5>
          <a class="btn btn-primary btn-rounded btn-sm mr-1 mb-2 waves-effect waves-light" href="{{url('/productos/mazas')}}">ver
            mas</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection