<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Metalugirca SB</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: KnightOne - v2.2.1
  * Template URL: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center justify-content-between">
                    <h1 class="logo"><a href="/">Metalurgica SB</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                    @include('layouts.navbar')

                    <a href="#about" class="get-started-btn scrollto">Whats App!</a>
                </div>
            </div>

        </div>
    </header><!-- End Header -->

    @yield('backgroud-image')
    <main id="main">
        <section class="inner-page">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2 class="text-center">@yield("content-title")</h2>
                    </div>
                </div>
                @yield('content')
            </div>
        </section>
    </main><!-- End #main -->

    @include('layouts.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>


    <!-- Template Main JS File -->
    <script src={{asset('js/app.js')}}></script>

</body>

</html>