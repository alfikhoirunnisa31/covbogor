@extends('layouts.home')
@section('content')  
      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
       <div class="container" data-aos="zoom-in">

         <div class="text-center">
           <h3>Mengapa Mayapada?</h3>
           <p>Sebagai rumah sakit berstandar internasional, Mayapada Hospital terus memberikan kualitas pelayanan kesehatan terbaik kepada customer. Kami percaya bahwa untuk mewujudkan visi dan misi perusahaan itu, butuh Sumber Daya Manusia (SDM) yang kompeten, profesional, dan berintegritas. Kami membuka kesempatan karier buat kamu untuk membantu Mayapada Hospital menjadi pilihan utama pelayanan kesehatan masyarakat Indonesia.</p>
         </div>

       </div>
      </section><!-- End Cta Section -->
   
     <!-- ======= About Us Section ======= -->
     <section id="about" class="about">
      <hr><div class="container" data-aos="fade-up">
        <div class="text-center">
          <h2>About</h2>
          <h3>BMC MAYAPADA HOSPITAL BOGOR</h3>
          <p>Mayapada Hospital merupakan salah satu rumah sakit swasta terbaik yang didirikan oleh Mayapada Healthcare Group pada 1 Juni 2008, setelah mengambil alih kepemilikan Honoris Hospital yang berlokasi di Jl. Honoris Raya Kav. 6, kawasan hunian eksklusif Modern Land Tangerang.</p>
        </div>
        

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="{{ ('medicio') }}/assets/img/rs/RS7.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <strong>PELAYANAN PENUNJANG MEDIS</strong>
            <p class="font-italic">
              Berikut ini adalah Pelayanan Penunjang Medis di BMC Mayapada Hospital Bogor :</p>
            <ul>
              <li><i class="icofont-check-circled"></i> Instalasi Laboratorium 24 Jam</li>
              <li><i class="icofont-check-circled"></i> Instalasi Radiologi & CT Scan 24 Jam</li>
              <li><i class="icofont-check-circled"></i> Instalasi Farmasi 24 Jam</li>
            </ul>
            <h4>Gratis PCR Swab Khusus Pasien Rawat Inap</h4>
            <p>Mayapada Hospital menyediakan layanan gratis PCR Swab Test khusus Pasien Rawat Inap Dengan Tindakan. </p>
            <a><strong>Berikut syarat dan ketentuannya:</strong></a>
              <li>Khusus untuk pasien rawat inap kelas 1 ke atas dengan tindakan minimal Rp10 juta rupiah.</li>
              <li>Berlaku untuk pasien pribadi, asuransi, dan perusahaan dengan syarat dan ketentuan berlaku.</li>
              <li>Penawaran berlaku sampai 31 Desember 2020.</li>
              <hr><a href="/login" class="btn-get-started scrollto col-md-7"><button type="button">Daftar</button></a></hr>
          </div>
        </div>

      </div>
     </section><!-- End About Us Section -->

     <!-- ======= Doctors Section ======= -->
     <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Doctors</h2>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ ('medicio') }}/assets/img/doctors/dokter1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Dr. Bambang Nugroho, Sp.OT (K)</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{{ ('medicio') }}/assets/img/doctors/dokter2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Dr. Elli Misnawati, Sp.KJ</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="{{ ('medicio') }}/assets/img/doctors/dokter3.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Dr. Iriawan Rembak Tinambunan, Sp.KJ</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="{{ ('medicio') }}/assets/img/doctors/dokter4.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Dr. Satrio Sukmoko, Sp.PD, FINASIM</h4>
              </div>
            </div>
          </div>

        </div>

      </div>
     </section><!-- End Doctors Section -->

     <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
            <div class="icon-box mt-5 mt-lg-0">
            <img src="{{ ('medicio') }}/assets/img/BANNER1.jpg" class="img-fluid">
            </div>
            <div class="icon-box mt-5">
            <img src="{{ ('medicio') }}/assets/img/BANNER2.jpg" class="img-fluid">
            </div>
            <div class="icon-box mt-5">
              <img src="{{ ('medicio') }}/assets/img/BANNER3.jpg" class="img-fluid">
            </div>
            <div class="icon-box mt-5">
            <img src="{{ ('medicio') }}/assets/img/BANNER4.png" class="img-fluid">
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style="background-image: url({{ ('medicio') }}/assets/img/pcr.jpg);" data-aos="zoom-in"></div>
        </div>

      </div>
    </section><!-- End Features Section --> 

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
        </div>
        <div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
          <a href="{{ ('medicio') }}/assets/img/gallery/BMC1.jpg" class="venobox" data-gall="gallery-carousel"><img src="{{ ('medicio') }}/assets/img/gallery/BMC1.jpg" alt=""></a>
          <a href="{{ ('medicio') }}/assets/img/gallery/BMC2.jpg" class="venobox" data-gall="gallery-carousel"><img src="{{ ('medicio') }}/assets/img/gallery/BMC2.jpg" alt=""></a>         
          <a href="{{ ('medicio') }}/assets/img/gallery/BMC3.jpg" class="venobox" data-gall="gallery-carousel"><img src="{{ ('medicio') }}/assets/img/gallery/BMC3.jpg" alt=""></a>
          <a href="{{ ('medicio') }}/assets/img/gallery/BMC4.jpg" class="venobox" data-gall="gallery-carousel"><img src="{{ ('medicio') }}/assets/img/gallery/BMC4.jpg" alt=""></a>
          <a href="{{ ('medicio') }}/assets/img/gallery/BMC5.jpg" class="venobox" data-gall="gallery-carousel"><img src="{{ ('medicio') }}/assets/img/gallery/BMC5.jpg" alt=""></a>
          <a href="{{ ('medicio') }}/assets/img/gallery/BMC6.jpg" class="venobox" data-gall="gallery-carousel"><img src="{{ ('medicio') }}/assets/img/gallery/BMC6.jpg" alt=""></a>
          <a href="{{ ('medicio') }}/assets/img/gallery/BMC7.jpg" class="venobox" data-gall="gallery-carousel"><img src="{{ ('medicio') }}/assets/img/gallery/BMC7.jpg" alt=""></a>
          <a href="{{ ('medicio') }}/assets/img/gallery/BMC8.jpg" class="venobox" data-gall="gallery-carousel"><img src="{{ ('medicio') }}/assets/img/gallery/BMC8.jpg" alt=""></a>
       </div>
      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.312642663002!2d106.80896591485634!3d-6.608018495221329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5dde19fb6a9%3A0x82e336fe6e97eaea!2sBMC%20MAYAPADA%20HOSPITAL!5e0!3m2!1sen!2sid!4v1580102213578!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Jl. Pajajaran Indah V No. 97, Baranangsiang, Kec.Bogor Timur,<br>Kota Bogor - Jawa Barat 16143</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info.bmc@mayapadahospital.com<br>customercare.mht@mayapadahospital.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>(0251) 830-7900<br>WA: 0811-101-5354</p>
                </div>
              </div>
            </div>
      </div>
    </section><!-- End Contact Section -->  
    
@endsection