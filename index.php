<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Club Moto Anak Langit</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Baker
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo">
                <img src="./assets/img/logo.png" alt="" width="50" height="50">
                <a href="index.html">Anak Langit</a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                    <li><a class="nav-link scrollto" href="#vm">Visi dan Misi</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Produk Kami</a></li>
                    <li><a class="nav-link scrollto" href="#profile">Profile</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>

                <!-- <div>
                    <a href="form-login.php" class="btn ">Sign Up</a>
                </div> -->
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container position-relative">
            <h1>We Are Reborn</h1>
            <h2>Motorbike Riders Who Are Friendly With The Community</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">



        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">

                    <div class="col-lg-6">
                        <img src="assets/img/about-img.jpg" class="img-fluid" alt="" height="100">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <?php 
                        include "koneksi.php";
                        $data = mysqli_query($koneksi,"SELECT * FROM about");
                        while ($tampil = mysqli_fetch_array($data)){
                        
                    ?>
                        <h3><?= $tampil['judul']; ?></h3>
                        <p>
                            <?= $tampil['isi']; ?>
                        </p>

                        <?php } ?>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->



        <!-- ======= Counts Section ======= -->
        <!-- <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section> -->
        <!-- End Counts Section -->

        <!-- ======= Visi Misi Section ======= -->
        <section id="vm" class="vm">
            <div class="container">

                <div class="section-title">
                    <h2>Visi dan Misi</h2>

                </div>

                <div class="row ">
                    <div class="col-md-6 text-center">
                        <div class="card-visi">
                            <h3>Visi</h3>
                            <p>1. MEMPERAT SILAHTURAHMI</p>
                            <p>2. MEMPERAT KEKOMPAKAN</p>
                            <p>3. MENJALIN KEBERSAMAAN</p>
                            <p>4. MENJALIN ORGANISASI YANG KUAT</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="card-visi">
                            <h3>Misi</h3>
                            <p>DENGAN ADANYA KOMUNITAS ANAK LANGIT CLUB INI DIHARAPKAN BISA UNTUK AJANG SILAHTURAHMI
                                UNTUK PARA ANGGOTA. DAN SELAIN ITU SEMOGA KOMUNITAS INI BISA MEMBUAT KEBERSAMAAN YANG
                                KUAT UNTUK SEMUA ANGGOTA. CLUB INI INGIN MENYATUKAN SEMUA PIKIRAN-PIKIRAN YANG BERBEDA
                                UNTUK MENUJU SATU TUJUAN YANG SAMA</p>
                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End Visi Misi Section -->

        <!-- ======= Profile Section ======= -->
        <section id="profile" class="profile">
            <div class="container">

                <div class="text-center">
                    <h3>Profil</h3>
                    <?php 
                        include "koneksi.php";
                        $data = mysqli_query($koneksi,"SELECT * FROM profil");
                        while ($tampil = mysqli_fetch_array($data)){
                        
                    ?>
                    <p><?= $tampil['isi']; ?></p>
                    <?php } ?>
                </div>

            </div>
        </section><!-- End Profile Section -->


        <!-- Artikel Section -->
        <section id="artikel" class="artikel">
            <div class="container">
                <h1 class="text-center">Artikel</h1>

                <div class="row mx-auto mt-3">
                    <?php 
                        include "koneksi.php";
                        $data = mysqli_query($koneksi,"SELECT * FROM artikel ORDER BY id_artikel ASC ");
                        while ($tampil = mysqli_fetch_array($data)){
                        
                        ?>
                    <div class="col-lg-4 col-sm-6 mx-auto mb-4 ">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/img/<?= $tampil['gambar'] ;?>" class="card-img-top d-block w-100"
                                alt="...">
                            <div class="card-body my-3">
                                <h5 class="card-title "><?= $tampil['judul'] ;?></h5>
                                <p class="card-text"><?= $tampil['isi'] ;?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </section>
        <!-- Artikel End -->


        <!--Galeri section  -->
        <section id="galeri" class="galeri">
            <div class="container">
                <h1 class="text-center">Galeri</h1>

                <div class="row">
                    <?php 
                        include "koneksi.php";
                        $data = mysqli_query($koneksi,"SELECT * FROM galeri ORDER BY id_galeri ASC ");
                        while ($tampil = mysqli_fetch_array($data)){
                        
                        ?>
                    <div class="col-lg-4 col-sm-6 mb-3">
                        <div class="thumbnail">
                            <div class="img-container">
                                <img src="assets/img/<?= $tampil['gambar'] ;?>" alt="" class="image w-100 rounded mx-auto d-block">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- End Galeri -->

        <!-- ======= Produk Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>Product</h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Clothes</li>
                            <li data-filter=".filter-card">Sparepart</li>
                            <li data-filter=".filter-web">Motor</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">
                <?php 
                        include "koneksi.php";
                        $data = mysqli_query($koneksi,"SELECT * FROM produk ORDER BY id_produk ASC");
                        while ($tampil = mysqli_fetch_array($data)){
                        
                        ?>
                    <div class="col-lg-4 col-md-6 portfolio-item <?= $tampil['filter']; ?>">
                        <img src="assets/img/<?= $tampil['gambar']; ?>" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><?= $tampil['nama_barang']; ?></h4>
                            <a href="assets/img/cloth3.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery"
                                data-glightbox="type: external" class="portfolio-details-lightbox details-link"
                                title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                <?php } ?>

                </div>

            </div>

            </div>
        </section><!-- End Produk Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Sistem kepengurusan Anak Langit Club tahun 2020-Now</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/ketua.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Hiro</h4>
                                <span>Leader of ALC</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/wakil-ketua.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Andra</h4>
                                <span>Vice Chairman ALC</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/sekretaris.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Jaelani</h4>
                                <span>Secretarial ALC</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/bendahara.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Gerry</h4>
                                <span>Exchequer ALC </span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">
                <div class="section-title ">
                    <h2 class="text-capitalize">Klien Kami</h2>
                </div>
                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section>
        <!-- End Clients Section -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row">

                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Our Address</h3>
                                    <p>Jl. Tanjung Raya Kec.Tembung Raya Kel.Perintis</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>anaklangitc@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Call Us</h3>
                                    <p>087681235612 </p>
                                    <p>087681325104 </p>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row mx-auto ">

                    <div class="col-lg-4 col-md-6 footer-contact ml-4">
                        <h3>Anak Langit Club</h3>
                        <p>

                            Jl. Tanjung Raya <br>
                            Kec.Tembung Raya<br>
                            Kel.Perintis <br><br>
                            <strong>Phone:</strong> 087681235612<br>
                            <strong>Email:</strong> anaklangitc@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Featured</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Profil</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Artikel</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Galeri</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Produc</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Clothes</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Sparepat</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Motorcycle</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">

            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>