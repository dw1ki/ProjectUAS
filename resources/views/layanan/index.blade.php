
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

  <title>@yield('title')UniPark - Layanan</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('landing_page/css/bootstrap.css')}}" />

  <!-- font awesome style -->
  <link href="{{asset('landing_page/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{asset('landing_page/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('landing_page/css/responsive.css')}}" rel="stylesheet" />

  <link href="{{asset('landing_page/assets/css/theme.css')}}" rel="stylesheet" />
    <style>
      .table_tarif {
        border-collapse: separate;
        border-spacing: 0.5em;
        width:100%;
      }
      .table_tarif tr td {
        padding:0.5em 1em;
      }
      .header_cell {
        vertical-align: middle;
        background: purple;
        color: #fff;
        height: 100%;
        border-radius: 0.5em;
        text-align: center;
        padding:8px;
      }
      .bubble_cell {
        vertical-align: middle;
        background: #D1DBE7;
        color: #000;
        height: 100%;
        border-radius: 0.5em;
        text-align: left;
      }
      .bubble_cell2 {
        vertical-align: middle;
        background: #ffe437;
        color: #000;
        height: 100%;
        border-radius: 0.5em;
        text-align: left;
      }
      .bg-yellow {
        background: #fffad0 !important;
      }
      #btn-back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
      }
      </style>
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
              <li class="nav-item active">
                <a class="nav-link" href="layanan">Layanan<span class="sr-only">(current)</span></a>
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
                Cek informasi harga dibawah halaman
              </p>
              <a href="#tarif">
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
    </div>
  </section>
  <!-- end service section -->

      <!-- Tabel Harga Roda Empat -->
      <section class="pt-5 pt-md-9" id="tarif">
        <div class="container">
          <div class="mb-7 text-center">
            <h5>Tarif Harian Parkir</h5>
            <h3>TARIF HARIAN MOBIL</h3>
          </div>
          <div class="">
            <p class="text-center">Paket Harian Izin Masuk Kampus untuk Kendaraan Roda 4 (Empat)</p>
            <div class="table-responsive">
              <table class="table_tarif">
              <tbody>
                <tr>
                  <th width="30" class="header_cell">No</th>
                  <th width="40%" class="header_cell">Jangka Waktu</th>
                  <th class="header_cell">Tarif (Rp) <sup>*</sup></th>
                </tr>                                
                <tr>
                  <td class="text-center bubble_cell">1</td>
                  <td class="bubble_cell">1 (satu) jam</td>
                  <td class="bubble_cell">5.000</td>
                </tr>
                <tr>
                  <td class="text-center bubble_cell">2</td>
                  <td class="bubble_cell">12 (dua belas) jam</td>
                  <td class="bubble_cell">50.000</td>
                </tr>
                <tr>
                  <td class="text-center bubble_cell">3</td>
                  <td class="bubble_cell">24 (dua puluh empat) jam</td>
                  <td class="bubble_cell">100.000</td>
                </tr>
              </tbody>
              </table>
            </div>
            <p class="px-2">*) tanpa biaya administrasi</p>
          </div>
        </div>
      </section>

      <!-- Tabel Harga Roda Empat -->
      <section class="pt-5 pt-md-9" id="tarif">
        <div class="container">
          <div class="mb-7 text-center">            
            <h3>TARIF HARIAN MOBIL</h3>
          </div>
          <div class="">
            <p class="text-center">Paket Harian Izin Masuk Kampus untuk Kendaraan Roda 4 (Empat)</p>
            <div class="table-responsive">
              <table class="table_tarif">
              <tbody>
                <tr>
                  <th width="30" class="header_cell">No</th>
                  <th width="40%" class="header_cell">Jangka Waktu</th>
                  <th class="header_cell">Tarif (Rp) <sup>*</sup></th>
                </tr>                                
                <tr>
                  <td class="text-center bubble_cell">1</td>
                  <td class="bubble_cell">1 (satu) jam</td>
                  <td class="bubble_cell">2.000</td>
                </tr>
                <tr>
                  <td class="text-center bubble_cell">2</td>
                  <td class="bubble_cell">12 (dua belas) jam</td>
                  <td class="bubble_cell">20.000</td>
                </tr>
                <tr>
                  <td class="text-center bubble_cell">3</td>
                  <td class="bubble_cell">24 (dua puluh empat) jam</td>
                  <td class="bubble_cell">40.000</td>
                </tr>
              </tbody>
              </table>
            </div>
            <p class="px-2">*) tanpa biaya administrasi</p>
          </div>
        </div>
      </section>

      <!-- Tabel Harga Roda Empat -->
      <section class="pt-5 pt-md-9" id="tarif">
        <div class="container">
          <div class="mb-7 text-center">
            <h5>Tarif Langganan Parkir</h5>
            <h3>TARIF BERLANGGANAN MOBIL</h3>
          </div>
          <div class="">
            <p class="text-center">Paket Langganan Izin Masuk Kampus untuk Kendaraan Roda 4 (Empat)</p>
            <div class="table-responsive">
              <table class="table_tarif">
              <tbody>
                <tr>
                  <th width="30" class="header_cell">No</th>
                  <th width="40%" class="header_cell">Jangka Waktu</th>
                  <th class="header_cell">Tarif (Rp) <sup>*</sup></th>
                </tr>
                <tr class="table-secondary">
                  <td colspan="3" class="bubble_cell2">Dosen, Tenaga Kependidikan, dan Anggota Majelis Wali Amanat</td>
                </tr>
                <tr>
                  <td class="text-center bubble_cell">1</td>
                  <td class="bubble_cell">1 (satu) bulan</td>
                  <td class="bubble_cell">50.000</td>
                </tr>
                <tr>
                  <td class="text-center bubble_cell">2</td>
                  <td class="bubble_cell">6 (enam) bulan</td>
                  <td class="bubble_cell">150.000</td>
                </tr>
                <tr class="table-secondary">
                  <td colspan="3" class="bubble_cell2">Mahasiswa/i</td>
                </tr>
                <tr>
                  <td class="text-center bubble_cell">3</td>
                  <td class="bubble_cell">1 (satu) bulan</td>
                  <td class="bubble_cell">120.000</td>
                </tr>
                <tr>
                  <td class="text-center bubble_cell">4</td>
                  <td class="bubble_cell">6 (enam) bulan</td>
                  <td class="bubble_cell">400.000</td>
                </tr>
                <tr class="table-secondary">
                  <td colspan="3" class="bubble_cell2">Mitra Kerjasama Universitas</td>
                </tr>
                <tr>
                  <td class="text-center bubble_cell">5</td>
                  <td class="bubble_cell">1 (satu) bulan</td>
                  <td class="bubble_cell">150.000</td>
                </tr>
                <tr>
                  <td class="text-center bubble_cell">6</td>
                  <td class="bubble_cell">2 (dua) bulan</td>
                  <td class="bubble_cell">225.000</td>
                </tr>
                <tr>
                  <td class="text-center bubble_cell">7</td>
                  <td class="bubble_cell">6 (enam) bulan</td>
                  <td class="bubble_cell">450.000</td>
                </tr>
              </tbody>
              </table>
            </div>
            <p class="px-2">*) belum termasuk biaya administrasi bank</p>
          </div>
        </div>
      </section>

      <!-- Tabel Harga Roda Dua -->
      <section class="pt-5 pt-md-9" id="tarif">
        <div class="container">
          <div class="mb-7 text-center">            
            <h3>TARIF BERLANGGANAN MOTOR</h3>
          </div>
          <div class="">
            <p class="text-center">Paket Langganan Izin Masuk Kampus untuk Kendaraan Roda 2 (Dua)</p>
            <div class="table-responsive">
              <table class="table_tarif">
              <tbody>
                <tr>
                  <th width="30" class="header_cell">No</th>
                  <th width="40%" class="header_cell">Jangka Waktu</th>
                  <th class="header_cell">Tarif (Rp) <sup>*</sup></th>
                </tr>
                <tr class="table-secondary">
                  <td colspan="3" class="bubble_cell2">Dosen, Tenaga Kependidikan, dan Anggota Majelis Wali Amanat</td>
                </tr>
                <tr>
                  <td class="text-center bubble_cell">1</td>
                  <td class="bubble_cell">1 (satu) bulan</td>
                  <td class="bubble_cell">20.000</td>
                </tr>
                <tr>
                  <td class="text-center bubble_cell">2</td>
                  <td class="bubble_cell">6 (enam) bulan</td>
                  <td class="bubble_cell">100.000</td>
                </tr>
                <tr class="table-secondary">
                  <td colspan="3" class="bubble_cell2">Mahasiswa/i</td>
                </tr>
                <tr>
                  <td class="text-center bubble_cell">3</td>
                  <td class="bubble_cell">1 (satu) bulan</td>
                  <td class="bubble_cell">90.000</td>
                </tr>
                <tr>
                  <td class="text-center bubble_cell">4</td>
                  <td class="bubble_cell">6 (enam) bulan</td>
                  <td class="bubble_cell">300.000</td>
                </tr>
                <tr class="table-secondary">
                  <td colspan="3" class="bubble_cell2">Mitra Kerjasama Universitas</td>
                </tr>
                <tr>
                  <td class="text-center bubble_cell">5</td>
                  <td class="bubble_cell">1 (satu) bulan</td>
                  <td class="bubble_cell">120.000</td>
                </tr>
                <tr>
                  <td class="text-center bubble_cell">6</td>
                  <td class="bubble_cell">2 (dua) bulan</td>
                  <td class="bubble_cell">200.000</td>
                </tr>
                <tr>
                  <td class="text-center bubble_cell">7</td>
                  <td class="bubble_cell">6 (enam) bulan</td>
                  <td class="bubble_cell">400.000</td>
                </tr>
              </tbody>
              </table>
            </div>
            <p class="px-2">*) belum termasuk biaya administrasi bank</p>
          </div>
        </div>
      </section>

       <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Metode Pembayaran
        </h2>        
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('landing_page/images/q1.png')}}" alt="">
            </div>            
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('landing_page/images/q2.png')}}" alt="">
            </div>            
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('landing_page/images/q3.png')}}" alt="">
            </div>            
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('landing_page/images/q4.png')}}" alt="">
            </div>            
          </div>
        </div>
      </div>      
    </div>
  </section>
  <!-- end service section -->

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