@extends('layouts.inner')

@section('content')
@section("content-title", "Mazas")

<section id="niveladora" class="niveladora bg-light">
  <div class="container">
    <div class="section-title">
      <h4>Niveladoras</h4>
    </div>
    <div class="container">
      <div class="row my-2">
        <div class="col-md-6">
          <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col d-flex justify-content-center">
              <a href="{{asset('images/productos/mazas/1.png')}}" data-gall="portfolioGallery"
                class="venobox preview-link" title="Llantas">
                <img src="{{asset('images/productos/mazas/1.png')}}" class="product-imagen">
              </a>
            </div>
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">Maza</strong>
              <h3 class="mb-0">Maza rueda niveladora</h3>
              <div class="my-1">
                <div class="badge badge-dark">FERCAM</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="tapadoras" class="tapadoras bg-light">
  <div class="container">
    <div class="section-title">
      <h4>Tapadoras</h4>
    </div>
    <div class="row my-2">
      <div class="col-md-6">
        <div
          class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col d-flex justify-content-center">
            <a href="{{asset('images/productos/mazas/2.png')}}" data-gall="portfolioGallery"
              class="venobox preview-link" title="Llantas">
              <img src="{{asset('images/productos/mazas/2.png')}}" class="product-imagen">
            </a>
          </div>
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Maza</strong>
            <h3 class="mb-0">Maza rueda tapadora</h3>
            <div class="my-1">
              <div class="badge badge-dark">FERCAM</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
      </div>
    </div>
  </div>
</section>

@endsection