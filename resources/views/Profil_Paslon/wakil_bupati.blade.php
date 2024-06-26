<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profile {{$wb->nama}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendors/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendors/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendors/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendors/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

  </header><!-- End Header -->

  

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>{{$wb->nama}}</h1>
      <p>Calon <span class="typed" data-typed-items="{{$wb->calon_role}} Toba"></span></p>
      <div class="social-links">
        <a target="_blank" href="{{$wb->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a target="_blank" href="{{$wb->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a target="_blank" href="{{$wb->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a target="_blank" href="{{$wb->skype}}" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a target="_blank" href="{{$wb->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="{{asset('storage/images/' . $wb->foto)}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>{{$wb->nama}}</h3>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$wb->tanggal_lahir}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday Place:</strong> <span>{{$wb->tempat_lahir}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$wb->nomor_hp}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$wb->alamat}}</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$umur}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$wb->degree}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>{{$wb->email}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Religion:</strong> <span>{{$wb->agama}}</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Education, Carier, Organization</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Carier</h4>
              @foreach ($wb->karirs as $karir)
                  <p><em>{{ $karir->keterangan }}</em></p>
                  <ul>
                      <li>{{ $karir->tempat }}</li>
                  </ul>
              @endforeach
          </div>

            <h3 class="resume-title">Education</h3>
            @foreach ($wb->educations as $education)
              <div class="resume-item">
                <h4>{{$education->program_studi}}</h4>
                <h5>{{$education->tahun_mulai}} - {{$education->tahun_selesai}}</h5>
                <p><em>{{$education->kampus}}</em></p>
                <p>{{$education->keterangan}}</p>
              </div>
            @endforeach
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Organization</h3>
            @foreach ($wb->organisasis as $org)
            <div class="resume-item">
              <h4>{{$org->nama}}</h4>
              <h5>{{$org->tahun_mulai}} - {{$org->tahun_sampai}}</h5>
              <p><em>{{$org->lokasi}}</em></p>
              <ul>
                @foreach ($org->aktivitas as $act)
                  <li>{{$act->keterangan}}</li>
                @endforeach
              </ul>
            </div>
            @endforeach
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>{{$wb->nama}}</h3>
      <p>{{$wb->deskripsi}}</p>
      <div class="social-links">



        <a target="_blank" href="{{$wb->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a target="_blank" href="{{$wb->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a target="_blank" href="{{$wb->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a target="_blank" href="{{$wb->skype}}" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a target="_blank" href="{{$wb->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendors/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendors/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendors/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendors/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendors/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendors/typed.js/typed.umd.js')}}"></script>
  <script src="{{asset('assets/vendors/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendors/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>

