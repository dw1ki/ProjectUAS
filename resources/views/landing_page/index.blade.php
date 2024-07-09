
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

  <title>@yield('title')UniPark - Campus Parking</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('landing_page/css/bootstrap.css')}}" />

  <!-- font awesome style -->
  <link href="{{asset('landing_page/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{asset('landing_page/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('landing_page/css/responsive.css')}}" rel="stylesheet" />    
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
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
              <li class="nav-item active">
                <a class="nav-link" href="/">Beranda<span class="sr-only">(current)</span></a>
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
              <li class="nav-item">
                <a class="nav-link" href="tentang">Tentang</a>
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

    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{asset('landing_page/images/logo.png')}}" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      UniPark - Campus Parking
                    </h1>
                    <p>
                      Parkir Terjamin, Kuliah Tanpa Khawatir di STT Terpadu Nurul Fikri
                    </p>
                    <div class="btn-box">
                      <a href="tentang" class="btn1">
                        Tentang Kami
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{asset('landing_page/images/location.png')}}" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Cek Area Parkir!
                    </h1>
                    <p>
                      Untuk menemukan tempat parkir yang tersedia dengan mudah dan cepat, tanpa kesulitan dan gangguan.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Cek Lokasi
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{asset('landing_page/images/vector1.png')}}" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Ayo Berlangganan Parkir!
                    </h1>
                    <p>
                      Nikmati hemat biaya dengan tarif langganan lebih terjangkau, serta nikmati kemudahan parkir setiap hari.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Registrasi!
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Informasi Layanan
        </h2>
        <p>
          Berikut informasi layanan parkir untuk memudahkan Anda mendaftarkan parkir kendaraan Anda.
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('landing_page/images/s1.png')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Informasi Lokasi
              </h5>
              <p>
               Tersedia lengkap dengan peta dan panduan,
              </p>
              <a href="lokasi">
                <span>
                  Selengkapnya
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('landing_page/images/s2.png')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Layanan Parkir
              </h5>
              <p>
                Memastikan pengguna nyaman mengelola parkir,
              </p>
              <a href="lokasi#lokasi">
                <span>
                  Selengkapnya
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('landing_page/images/s3.png')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Informasi Harga
              </h5>
              <p>
                Harga terjangkau, kendaraan pasti aman,
              </p>
              <a href="layanan">
                <span>
                  Selengkapnya
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('landing_page/images/s4.png')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Registrasi Kendaraan
              </h5>
              <p>
                Daftarkan kendaraanmu dengan buat akunmu,
              </p>
              <a href="registrasi">
                <span>
                  Selengkapnya
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="layanan">
          Lihat Selengkapnya
        </a>
      </div>     
    </div>
  </section>
  <!-- end service section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Tentang Kami
              </h2>
            </div>
            <p>
              UniPark merupakan solusi terdepan dalam manajemen parkir di Kampus STT Nurul Fikri, 
              mengintegrasikan teknologi modern dengan keamanan yang terjamin. 
              Platform kami dirancang untuk mempermudah mahasiswa, staf, 
              dan pengunjung dalam mencari dan mengelola tempat parkir dengan efisien. 
              Dengan UniPark, kami tidak hanya menawarkan kemudahan akses parkir, 
              tetapi juga menghadirkan pengalaman yang aman dan nyaman bagi seluruh komunitas kampus.
            </p>
            <a href="tentang">
              Selengkapnya
            </a>
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

  <!-- lokasi section -->

  <section class="case_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Lokasi Kampus
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('landing_page/images/akampus.png')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                STT Terpadu Nurul Fikri - Kampus A
              </h5>
              <p>
                Jl. Situ Indah 116, Tugu, Cimanggis, Depok, Jawa Barat.
              </p>
              <a href="lokasi#a">
                <span>
                  Selengkapnya
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('landing_page/images/bkampus.jpg')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                STT Terpadu Nurul Fikri - Kampus B
              </h5>
              <p>
                Jl. Raya Lenteng Agung No.20-21, RT.4/RW.1, Jakarta Selatan.
              </p>
              <a href="lokasi#b">
                <span>
                  Selengkapnya
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end lokasi section -->

  <!-- client section -->
  <section class="client_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
      </div>
    </div>
    <div id="customCarousel2" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="{{asset('landing_page/images/person_1.jpg')}}" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Rizqi Fadillah
                        </h5>
                        <h6>
                          Mahasiswa
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Layanan parkir kampus ini benar-benar membantu saya menghemat waktu setiap hari. Dengan berlangganan, saya selalu mendapatkan tempat parkir yang dekat dengan gedung kuliah. Tidak perlu lagi khawatir terlambat karena mencari parkir!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="{{asset('landing_page/images/person_2.jpg')}}" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Miko Danuarta
                        </h5>
                        <h6>
                          Mahasiswa
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Sebagai mahasiswa dengan jadwal kuliah yang padat, saya sangat mengapresiasi layanan parkir kampus ini. Tempat parkir yang aman dan terjamin membuat saya bisa lebih fokus pada pelajaran tanpa harus repot mencari parkir setiap hari.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="{{asset('landing_page/images/client.jpg')}}" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Nicky Bryan
                        </h5>
                        <h6>
                          Mahasiswa
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Parkir di kampus kini menjadi sangat mudah berkat layanan parkir berlangganan. Saya tidak perlu lagi khawatir terlambat ke kelas atau praktikum karena tempat parkir selalu tersedia. Sangat nyaman dan praktis!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#customCarousel2" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel2" data-slide-to="1"></li>
        <li data-target="#customCarousel2" data-slide-to="2"></li>
      </ol>
    </div>
  </section>
  <!-- end client section -->



  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-lg-4 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Tuliskan Keluhanmu
              </h2>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="Full Name " />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone number" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex ">
                <button>
                  KIRIM
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-7 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

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