<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>UniPark - Campus Parking</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('landing_page/css/bootstrap.css')}}" />

  <!-- font awesome style -->
  <link href="{{asset('landing_page/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{asset('landing_page/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('landing_page/css/responsive.css')}}" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index">
            <span>
              UniPark
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item">
                <a class="nav-link" href="/">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="lokasi">Lokasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="layanan">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registrasi">Registrasi</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="tentang">Tentang<span class="sr-only">(current)</span></a>
              </li>
            </ul>
            <div class="quote_btn-container">
              <a href="/login" class="quote_btn">
                Login
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding layout_margin">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Tentang Kami
              </h2>
            </div>
            <p>Selamat datang di UniPark, sebuah platform inovatif yang mengubah cara parkir di Kampus STT Nurul Fikri. UniPark tidak hanya menyediakan kemudahan dalam mencari dan mengelola tempat parkir, tetapi juga menekankan keamanan sebagai prioritas utama. Dengan integrasi teknologi modern dan sistem yang terpadu, kami memastikan setiap pengguna dapat dengan mudah menemukan tempat parkir, melakukan reservasi secara online, dan menerima notifikasi yang membantu dalam pengaturan parkir mereka.</p>
              
            <p>Kami mengerti betapa pentingnya keamanan dalam pengalaman parkir. Di UniPark, keamanan tidak hanya diperkuat dengan teknologi canggih, tetapi juga didukung oleh kehadiran satpam yang profesional dan terlatih. Setiap langkah penggunaan UniPark didesain untuk memberikan rasa aman dan ketenangan pikiran kepada setiap pengguna kami, menjadikan parkir di kampus tidak lagi menjadi hambatan dalam kegiatan sehari-hari.</p>
            </p>           
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{asset('landing_page/images/about-img.png')}}" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->

  <div class="footer_container">
    <!-- info section -->

    <section class="info_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 ">
            <div class="info_detail">
              <h4>
                UniPark
              </h4>
              <p>
                UniPark merupakan solusi terdepan dalam manajemen parkir di Kampus STT Nurul Fikri, mengintegrasikan teknologi modern dengan keamanan yang terjamin.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-2 mx-auto">
            <div class="info_link_box">
              <h4>
                Links
              </h4>
              <div class="info_links">
                <a class="" href="index">
                  Beranda
                </a>
                <a class="" href="about">
                  Lokasi
                </a>
                <a class="" href="service">
                  Layanan
                </a>
                <a class="" href="contact">
                  Registrasi
                </a>
                <a class="" href="contact">
                  Tentang
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <h4>
              Subscribe
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
          <div class="col-md-6 col-lg-3 mb-0 ml-auto">
            <div class="info_contact">
              <h4>
                Address
              </h4>
              <div class="contact_link_box">
                <a href="lokasi">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span>
                    Location
                  </span>
                </a>
                <a href="wa.me/6285716243174">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>
                    Call 0857-1624-3174
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                    info@nurulfikri.ac.id
                  </span>
                </a>
              </div>
            </div>
            <div class="info_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info section -->

    <!-- footer section -->
    <footer class="footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Kelompok 5 (TI08)</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->
  </div>
  
  <!-- jQery -->
  <script src="{{asset('landing_page/js/jquery-3.4.1.min.js')}}"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="{{asset('landing_page/js/bootstrap.js')}}"></script>
  <script src="{{asset('landing_page/js/custom.js')}}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>