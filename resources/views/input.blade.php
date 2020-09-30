@extends('layouts.home')
@section('content')
           <!-- ======= Appointment Section ======= -->
    <section id="appoinment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Input Data</h2>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nama Fasilitas Kesehatan*" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email Fasilitas Kesehatan" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Nomor Fasilitas Kesehatan" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-row">
          <div class="col-md-4 form-group">
              <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Fasilitas Kesehatan" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="department" id="department" class="form-control">
                <option value="">Jenis Fasilitas Kesehatan</option>
                <option value="Rumah Sakit">Rumah Sakit</option>
                <option value="Klink">Klinik</option>
                <option value="Puskesmas">Puskesmas</option>
                <option value="Laboratorium">Laboratorium</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4">
                 <a>Jenis tes yang tersedia</a>
                <Input type="checkbox">Rapid</Input>
                <Input type="checkbox">PCR/Swab</Input>
              <div class="validate"></div>
            </div>
          </div>

          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div>
               <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
             </div>
          <div class="text-center"><button type="submit">Kirim</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->
@endsection