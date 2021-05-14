@extends('layouts.inner')

@section('content')
@section("content-title", "Ruedas armadas")

<section id="ruedas" class="bg-light">
  <div class="container">
    <div class="row my-2">
      <div class="col-md-6">
        <div
          class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col d-flex justify-content-center">
            <a href="{{asset('images/productos/ruedas/1.png')}}" data-gall="portfolioGallery"
              class="venobox preview-link" title="Llantas">
              <img src="{{asset('images/productos/ruedas/1.png')}}" class="product-imagen">
            </a>
          </div>
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Rueda</strong>
            <h3 class="mb-0">4 1/2 ” x 15”</h3>
            <div class="my-1">
              <div class="badge badge-dark">AGROMETAL</div>
              <div class="badge badge-dark">FERCAM</div>
              <div class="badge badge-dark">APACHE</div>
              <div class="badge badge-dark">CRUCIANELLI</div>
              <div class="badge badge-dark">GIORGI</div>
              <div class="badge badge-dark">PLA</div>
              <div class="badge badge-dark">ERCA</div>
              <div class="badge badge-dark">Y OTRAS</div>
            </div>
            <table class="table table-striped">
              <thead>
                <th>Medida</th>
              </thead>
              <tbody>
                <tr>
                  <td>4 1/2 ” x 15”</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div
          class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col d-flex justify-content-center">
            <a href="{{asset('images/productos/ruedas/2.png')}}" data-gall="portfolioGallery"
              class="venobox preview-link" title="Llantas">
              <img src="{{asset('images/productos/ruedas/2.png')}}" class="product-imagen">
            </a>
          </div>
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Rueda</strong>
            <h3 class="mb-0">2 1/8 ” x 15”</h3>
            <div class="my-1">
              <div class="badge badge-dark">AGROMETAL</div>
              <div class="badge badge-dark">FERCAM</div>
              <div class="badge badge-dark">ACHILLI</div>
              <div class="badge badge-dark">CRUCIANELLI</div>
              <div class="badge badge-dark">GIORGI</div>
              <div class="badge badge-dark">PLA</div>
              <div class="badge badge-dark">ERCA</div>
              <div class="badge badge-dark">Y OTRAS</div>
            </div>
            <table class="table table-striped">
              <thead>
                <th>Medida</th>
              </thead>
              <tbody>
                <tr>
                  <td>2 1/8 ” x 15”</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="row my-2">
      <div class="col-md-6">
        <div
          class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col d-flex justify-content-center">
            <a href="{{asset('images/productos/ruedas/3.png')}}" data-gall="portfolioGallery"
              class="venobox preview-link" title="Llantas">
              <img src="{{asset('images/productos/ruedas/3.png')}}" class="product-imagen">
            </a>
          </div>
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Rueda</strong>
            <h3 class="mb-0">2 7/8 ” x 15”</h3>
            <div class="my-1">
              <div class="badge badge-dark">AGROMETAL</div>
              <div class="badge badge-dark">APACHE</div>
              <div class="badge badge-dark">Y OTRAS</div>
            </div>
            <table class="table table-striped">
              <thead>
                <th>Medida</th>
              </thead>
              <tbody>
                <tr>
                  <td>2 7/8 ” x 15”</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div
          class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col d-flex justify-content-center">
            <a href="{{asset('images/productos/ruedas/4.png')}}" data-gall="portfolioGallery"
              class="venobox preview-link" title="Llantas">
              <img src="{{asset('images/productos/ruedas/4.png')}}" class="product-imagen">
            </a>
          </div>
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Rueda</strong>
            <h3 class="mb-0">1” x 12”</h3>
            <div class="my-1">
              <div class="badge badge-dark">AGROMETAL</div>
              <div class="badge badge-dark">FERCAM</div>
              <div class="badge badge-dark">APACHE</div>
              <div class="badge badge-dark">CRUCIANELLI</div>
              <div class="badge badge-dark">GIORGI</div>
              <div class="badge badge-dark">PLA</div>
              <div class="badge badge-dark">ERCA</div>
              <div class="badge badge-dark">Y OTRAS</div>
            </div>
            <table class="table table-striped">
              <thead>
                <th>Medida</th>
              </thead>
              <tbody>
                <tr>
                  <td>1” x 12”</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


  </div>
</section>

@endsection