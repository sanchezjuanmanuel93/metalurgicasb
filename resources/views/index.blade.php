@extends('layouts.app')

@section('backgroud-image')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-8">
        <h1>Metalurgica SB</h1>
        <h2>Maxima calidad en fabricacion de ruedas y mazas para sembradoras.</h2>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
          data-autoplay="true"></a>
      </div>
    </div>
  </div>
</section><!-- End Hero -->
@endsection

@section('content')

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title">
      <h2>Nuestros Productos</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
        in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li class="filter-active">Todos</li>
          <li class="filter-active">Llantas</li>
          <li class="filter-active">Cubiertas</li>
          <li class="filter-active">Mazas</li>
          <li class="filter-active">Fuelles</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">

      <div class="col-lg-4 col-md-6 portfolio-item">
        <img src="{{asset('images/index/productos/1.png')}}" class=" img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Llantas de chapa</h4>
          <a href="{{asset('images/index/productos/1.png')}}" data-gall="portfolioGallery" class="venobox preview-link"
            title="Llantas"><i class="bx bx-plus"></i></a>
          <a href="/productos/llantas" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item">
        <img src="{{asset('images/index/productos/2.png')}}" class=" img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Web 3</h4>
          <a href="{{asset('images/index/productos/2.png')}}" data-gall=" portfolioGallery" class="venobox preview-link"
            title="Web 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="{{asset('images/index/productos/3.png')}}" class=" img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 2</h4>
          <a href="{{asset('images/index/productos/3.png')}}" data-gall=" portfolioGallery" class="venobox preview-link"
            title="App 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="{{asset('images/index/productos/4.png')}}" class=" img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Card 2</h4>
          <a href="{{asset('images/index/productos/4.png')}}" data-gall=" portfolioGallery" class="venobox preview-link"
            title="Card 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="{{asset('images/index/productos/5.png')}}" class=" img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Web 2</h4>
          <a href="{{asset('images/index/productos/5.png')}}" data-gall=" portfolioGallery" class="venobox preview-link"
            title="Web 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="{{asset('images/index/productos/6.png')}}" class=" img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 3</h4>
          <a href="{{asset('images/index/productos/6.png')}}" data-gall=" portfolioGallery" class="venobox preview-link"
            title="App 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Section -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2>Nuestra Empresa</h2>
      <p>Tenemos a disposicion una amplia variedad de ruedas y mazas para sembradoras fabricadas en nuestro
        establecimiento metalurgico.</p>
    </div>

    <div class="row content">
      <div class="col-lg-6">
        <p>
          Debemos destacar que Metalúrgica SB cuenta con mas de 35 años de experiencia, los cuales nos brindan
          un sinfin de conocimientos en el rubro agrícola,los que volcamos a nuestros productos logrados asi una
          excelente calidad y confiabilidad.
        </p>
        <ul>
          <li><i class="ri-check-double-line"></i> Rapida entrega </li>
          <li><i class="ri-check-double-line"></i> Calidad y confiabilidad </li>
          <li><i class="ri-check-double-line"></i> Variedad de productos</li>
        </ul>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <p>
          Estamos en condiciones de ofrecer una rápida entrega de la mercaderia ya que contamos con un stock
          permanente en todas las medidas y disponemos de movilidad propia para desplazar los pedidos a terminales
          de transportes o comisionistas.
        </p>
        <a href="/#contact" class="btn-learn-more">Contacto</a>
      </div>
    </div>

  </div>
</section><!-- End About Us Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services bg-light">
  <div class="container">

    <div class="section-title">
      <h2>Servicios</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
        in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="icon-box">
          <div class="icon"><i class='bx bxs-wrench'></i></div>
          <h4><a href="">Fabricacion de Llantas</a></h4>
          <p>Amplio stock de medidas estándar. </p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="icon-box">
          <div class="icon"><i class='bx bxs-cog'></i></div>
          <h4><a href="">Armado de Ruedas</a></h4>
          <p>Armado completo de toda la rueda. </p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
        <div class="icon-box">
          <div class="icon"><i class='bx bxs-truck'></i></div>
          <h4><a href="">Envios</a></h4>
          <p>Movilidad propia para hacer llegar los pedidos en tiempo y forma.</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Contact</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
        in iste officiis commodi quidem hic quas.</p>
    </div>
  </div>

  <div>
    <iframe style="border:0; width: 100%; height: 350px;"
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13394.537424778679!2d-60.7036896!3d-32.9342575!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf4c96bde897639b5!2sBoccella%20Metalurgica!5e0!3m2!1ses!2sar!4v1617990895385!5m2!1ses!2sar"
      frameborder="0" allowfullscreen></iframe>
  </div>

  <div class="container">

    <div class="row mt-5">

      <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="ri-map-pin-line"></i>
            <h4>Ubicacion:</h4>
            <p>Solís 602, Rosario, Santa F</p>
          </div>

          <div class="email">
            <i class="ri-mail-line"></i>
            <h4>Email:</h4>
            <p>contacto@metalurgicasb.com.ar</p>
          </div>

          <div class="phone">
            <i class="ri-phone-line"></i>
            <h4>Telefono:</h4>
            <p>+54 9 3413786491</p>
          </div>

        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4"
                data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email"
                data-msg="Ingrese un email valido" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto"
              data-rule="minlen:4" data-msg="El asunto debe contener por lo menos 8 caracteres" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required"
              data-msg="Es requerido escribir un mensaje" placeholder="Mensaje"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Cargando</div>
            <div class="error-message"></div>
            <div class="sent-message">Su consulta fue realizada con exito!</div>
          </div>
          <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->
@endsection