<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <link href="{{ ('medicio') }}/assets/img/logo3.jpg" rel="icon">
  <title>CovBogor</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ ('medicio') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ ('medicio') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ ('medicio') }}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{ ('medicio') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ ('medicio') }}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{ ('medicio') }}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{ ('medicio') }}/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="{{ ('medicio') }}/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ ('medicio') }}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v2.0.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo mr-auto"><img src="{{ ('medicio') }}/assets/img/logo3.jpg" alt="">CovBogor</a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="#daftar-rs">Daftar RS</a></li>
          <li><a href="#services">Informasi</a></li>          
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= #main ======= -->
  <main id="main">
    <!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{ ('medicio') }}/assets/img/slide/slide-1.jpg)">
          <div class="container">
            <h4>Kunci dari upaya melawan Covid-19 adalah testing dengan cepat, luas dan efektif</h4>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{ ('medicio') }}/assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h4><strong class="title">Telekonsultasi</strong></h4>
            <h4>Cukup #dirumahaja, kamu bisa konsultasi dengan dokter melalui video call</h4>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url({{ ('medicio') }}/assets/img/slide/newnormal.jpg)">
          <div class="container">
          <h2><strong class="title">Sudah siapkah Anda beraktivitas di era new normal?</strong></h2>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <div class="container-fluid" id="container-wrapper">
  @yield('content')
 </div>
<!-- ======= daftar-rs Section ======= -->
<section id="daftar-rs" class="daftar-rs">

<div class="text-center">
  <h1>Direktori Tempat Menyediakan Test Covid-19</h1>
</div>

<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">
<div class="container" data-aos="fade-up">

<div class="row">

  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
    <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
      <img src="{{ ('medicio') }}/assets/img/rs/RS7.jpg" class="img-fluid">
      <h4 class="title"><a href="">Mayapada Hospital</a></h4>
      <h4 class="description">Melayani penanganan pasien Covid-19</h4>
      <hr><a href="/rs" class="btn-get-started scrollto">Read More</a></hr>
    </div>
  </div>

  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
      <img src="{{ ('medicio') }}/assets/img/rs/RS1.jpg" class="img-fluid">
      <h4 class="title"><a>RSPG Cisarua Bogor</a></h4>
      <p class="description">(Laboratorium medis)</p>
      <h4 class="description">Rumah Sakit Paru Dokter M. Goenawan Partowidigdo</h4>
      <hr><a href="#cta" class="btn-get-started scrollto">Read More</a></hr>
    </div>
  </div>

  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
      <img src="{{ ('medicio') }}/assets/img/rs/RS2.jpg" class="img-fluid">
      <h4 class="title"><a href="">RSUP FATMAWATI</a></h4>
      <p class="description">(Rumah sakit umum)</p>
      <h4 class="description">Rumah Sakit Umum Pusat Fatmawati</h4>
      <hr><a href="#cta" class="btn-get-started scrollto">Read More</a></hr>
    </div>
  </div>

  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
      <img src="{{ ('medicio') }}/assets/img/rs/RS3.jpg" class="img-fluid">
      <h4 class="title"><a href="">Siloam Hospitals Bogor</a></h4>
      <h4 class="description">Melayani penanganan pasien Covid-19</h4>
      <hr><a href="#cta" class="btn-get-started scrollto">Read More</a></hr>
    </div>
  </div>

  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
      <img src="{{ ('medicio') }}/assets/img/rs/RS4.jpg" class="img-fluid">
      <h4 class="title"><a href="">Rumah Sakit Bogor Senior</a></h4>
      <h4 class="description">Melayani penanganan pasien Covid-19</h4>
      <hr><a href="#cta" class="btn-get-started scrollto">Read More</a></hr>
    </div>
  </div>

  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
    <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
      <img src="{{ ('medicio') }}/assets/img/rs/RS5.jpg" class="img-fluid">
      <h4 class="title"><a href="">RSUD Kota Bogor</a></h>
      <h4 class="description">Rumah Sakit Umum Daerah Kota Bogor</h4>
      <hr><a href="#cta" class="btn-get-started scrollto">Read More</a></hr>
    </div>
  </div>

  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
    <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
      <img src="{{ ('medicio') }}/assets/img/rs/RS6.jpg" class="img-fluid">
      <h4 class="title"><a href="">RSPG Cisarua Bogor</a></h4>
      <h4 class="description">(Rumah sakit spesialis)</h4>
      <h4 class="description">Rumah Sakit Paru Dr. M. Goenawan Partowidigdo</h4>
      <hr><a href="#cta" class="btn-get-started scrollto">Read More</a></hr>
    </div>
  </div>

  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
    <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
      <img src="{{ ('medicio') }}/assets/img/rs/RS8.jpg" class="img-fluid">
      <h4 class="title"><a href="">Rumah Sakit Azra Bogor</a></h4>
      <h4 class="description">Melayani penanganan pasien Covid-19</h4>
      <hr><a href="#cta" class="btn-get-started scrollto">Read More</a></hr>
    </div>
  </div>

</div>
</div>
</section><!-- End Featured Services Section -->

</section><!-- End daftar-rs Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Protokol Kesehatan</h2>
          <p><strong>Sehat</strong> itu bukan suatu kemewahan. <strong>Sehat</strong> itu murah, tetapi menjadi mahal ketika sehat telah berubah menjadi <strong>sakit</strong></p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <img src="{{ ('medicio') }}/assets/img/pk/NN1.jpg" class="img-fluid">
            <h4 class="title"><a href="">Gunakan Masker</a></h4>
            <p class="description">Gunakan masker saat bepergian atau keluar rumah</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{ ('medicio') }}/assets/img/pk/NN2.jpg" class="img-fluid">
            <h4 class="title"><a href="">Menjaga Jarak</a></h4>
            <p class="description">Tetap jaga jarak aman dengan orang lain minimal 1-2 meter</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <img src="{{ ('medicio') }}/assets/img/pk/NN3.jpg" class="img-fluid">
            <h4 class="title"><a href="">Mencuci Tangan</a></h4>
            <p class="description">Rajin mencuci tangan dengan sabun dan air yang mengalir</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <img src="{{ ('medicio') }}/assets/img/pk/NN4.jpg" class="img-fluid">
            <h4 class="title"><a href="">Menutup Hidung dan Mulut</a></h4>
            <p class="description">Tutup mulut atau hidung saat hendak batuk atau bersin</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{ ('medicio') }}/assets/img/pk/NN5.jpg" class="img-fluid">
            <h4 class="title"><a href="">Membuang Kain/Tissue</a></h4>
            <p class="description">Buang tissue yang telah digunakan ke tempat sampah</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <img src="{{ ('medicio') }}/assets/img/pk/NN6.jpg" class="img-fluid">
            <h4 class="title"><a href="">Jangan Menyentuh Daerah Muka</a></h4>
            <p class="description">Jangan menyentuh muka dengan telapak tangan</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright - 2020
      </div>
      <div class="credits">
        Developed by <strong>CovBogor</strong>
      </div>
    </div>
  </footer>  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ ('medicio') }}/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{ ('medicio') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ ('medicio') }}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{ ('medicio') }}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ ('medicio') }}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{ ('medicio') }}/assets/vendor/counterup/counterup.min.js"></script>
  <script src="{{ ('medicio') }}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{ ('medicio') }}/assets/vendor/venobox/venobox.min.js"></script>
  <script src="{{ ('medicio') }}/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ ('medicio') }}/assets/js/main.js"></script>

</body>

</html>