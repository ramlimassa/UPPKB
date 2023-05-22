{{-- @extends('layouts.main')

@section('container')

  <h1>Selamat Datang di Sistem Informasi Pengolahan Data UPPKB</h1>

@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UPPKB | <?= $title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- <link href="assets/img/favicon.png" rel="icon"> --}}
  {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <link rel="apple-touch-icon" sizes="180x180" href="/assets/pavicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/pavicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/pavicon/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NewBiz
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an text logo -->
        <h1><a href="index.html">UPPKB</a></h1>
        {{-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> --}}
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#services">Kabar Terbaru</a></li>
          <li><a class="nav-link scrollto " href="#team">Profile</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->

  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container" data-aos="fade-up">

      <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/hero-img.svg" alt="" class="img-fluid">
      </div>

      <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
        <h2>Sistem Informasi Pengolahan Data<br> <span style="text-decoration: none;font-size: 20px;color: #fff;"> Unit Pelaksana Penimbangan Kendaraan Bermotor <br> (UPPKB) </span></h2>
        <div>
          {{-- <button type="button" class="btn-get-started scrollto" data-bs-toggle="modal" data-bs-target="#login">
            Login
          </button> --}}
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-get-started scrollto" data-bs-toggle="modal" data-bs-target="#modalLogin">
            Login
          </button>
          
          {{-- <a href="#javascript:void(0)" onclick="login_modal();" class="btn-get-started scrollto">Login</a> --}}
          {{-- <a href="" onclick="login_modal();" class="btn-get-started">Login</a> --}}
          {{-- <a href="#services" class="btn-services scrollto">Our Services</a> --}}
        </div>
      </div>

    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>About Us</h3>
          <p>UPPKB Somba Opu merupakan satuan pelayanan yang dikelola oleh Balai Pengelola Transportasi Darat (BPTD) Wilayah XIX Provinsi Sulawesi Selatan.</p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
              Jembatan Timbang atau Unit Pelaksana Penimbangan Kendaraan Bermotor (UPPKB) merupakan salah satu alat pengawasan dan pengendalian muatan angkutan barang ataupun angkutan yang melebihi batas ketentuan.
            </p>
            <h3>Fungsi Jembatan Timbang atau UPPKB</h3>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Fungsi Pencatatan</a></h4>
              <p class="description">Untuk melihat perkembangan lalu lintas angkutan barang dan kendaraan yang melebihi muatan.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-camera2"></i></div>
              <h4 class="title"><a href="">Fungsi Pengawasan</a></h4>
              <p class="description">Lalu-lintas angkutan barang memerlukan pengawasan tonase kendaraan dan jenis barang yang diangkut.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-stoplights"></i></div>
              <h4 class="title"><a href="">Fungsi Penindakan</a></h4>
              <p class="description">Untuk mencegah kerusakan jalan perlu dilakukan oenindakan berdasarkan berat tonase yang diijinkan untuk tiap kelas jalan.</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
            <img src="assets/img/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0" data-aos="fade-left">
            <h4>Tujuan Jembatan Timbang atau UPPKB</h4>
            <p>
              Tujuan utama dari Jembatan Timbang  adalah untuk mencegah terjadinya kerusakan jalan yang di akibatkan oleh kendaraan yang memilikibeban muatan melebihi kapasitas berat jalan.
            </p>
            <p>
              Apabila kendaraan muat barang yang melintasi UPPKB memiliki nilai total berat melebihi keentuan yang berlaku, maka kendaraan tersebut tidak diperbolehkan melewati jalur jalan yang diawasi UPPKB. Pada situasi tertentu,  kendaraan angkutan barang tersebut harus menurunkan material muatan dari kendaraan sampai totla berat kendaraan dan muatan barangnya berada dibawah batas nilai total berat yang telah ditentukan.
            </p>
            <p>
              Untuk situasi pelanggaran tertentu, supir atau pemilik kendaraan juga dapat menerima sanksi denda tergantung dari jenis pelanggaran yang ditemukan oleh petugas UPPKB.
            </p>
          </div>
        </div>

        {{-- <div class="row about-extra">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="assets/img/about-extra-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right">
            <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
            <p>
              Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt.
            </p>
            <p>
              Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
            </p>
            <p>
              Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
            </p>
          </div>

        </div> --}}

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Kabar Terbaru</h3>
          <p>Informasi atau berita terkait Unit Pelaksana Penimbangan Kendaraan Bermotor (UPPKB) akan dipublikasikan disini.</p>
        </header>

        {{-- <div class="row justify-content-center">

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-brightness-high" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-calendar4-week" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>

        </div> --}}

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Profile Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>Profil Pejabat</h3>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.311384873281!2d119.46300131377514!3d-5.213677253984031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee35f75dfe379%3A0xfaf1e4cdba7d077d!2sUPPKB%20Somba%20Opu%20Balai%20Pengelola%20Transportasi%20Darat%20Wilayah%20XIX%20Prov.%20SulselBar%20Kementerian%20Perhubungan!5e0!3m2!1sid!2sid!4v1680924243288!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 300px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-12 info">
                <i class="bi bi-geo-alt"></i>
                <p>Jalan Poros Malino, Batangkaluku, Kec. Somba Opu, Kabupaten Gowa, Sulawesi Selatan 92113</p>
              </div>
              <div class="col-md-12 info">
                <i class="bi bi-envelope"></i>
                <p>info@example.com</p>
              </div>
              <div class="col-md-12 info">
                <i class="bi bi-phone"></i>
                <p>+1 5589 55488 55</p>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Unit Pelaksana Penimbangan Kendaraan Bermotor (UPPKB)</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
      -->
        Developed by <a href="#">Muh. Ramli Massa</a>
      </div>
    </div>
  </footer><!-- End Footer -->


  <!-- Modal -->
  <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Please Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>        
          @endif


          <main class="form-signin w-100 p-auto">
            <div class="d-flex justify-content-center">
              <img class="mb-3 d-block center" src="img/logo.png" alt="logo" width="100">
            </div>
            
            {{-- <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1> --}}
            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="Username" placeholder="Username" autofocus required>
                <label for="username">Username</label>
                @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="Password" placeholder="Password" required>
                <label for="username">Password</label>
              </div>
          
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember me
                </label>
              </div>
              <div class="modal-footer">
                  {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                <button type="Submit" class="btn btn-primary">Login</button>
            </form>
          </main>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
        
      </div>
    </div>
  </div>

  @if(session()->has('loginError'))
  <script>
    var myModal = new bootstrap.Modal(document.getElementById("modalLogin"), {});

    myModal.show()
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Something went wrong!',
      footer: '<a href="">Why do I have this issue?</a>'
    })
    // Swal.fire({
    //   icon: 'error',
    //   title: 'Login Gagal',
    //   text: 'Username / Password Salah',
    // })
  </script>
  @endif


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  @if(session()->has('loginError'))
          <script>
            var myModal = new bootstrap.Modal(document.getElementById("modalLogin"), {});

            myModal.show()
            Swal.fire({
              icon: 'error',
              title: 'Login Gagal',
              text: 'Username / Password Salah',
            })
          </script>
          @endif


</body>

</html>