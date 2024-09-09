<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - BizLand Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<style type="text/css">
</style>

<style>
.wrapword {
    white-space: -moz-pre-wrap !important;
    /* Mozilla, since 1999 */
    white-space: -pre-wrap;
    /* Opera 4-6 */
    white-space: -o-pre-wrap;
    /* Opera 7 */
    white-space: pre-wrap;
    /* css-3 */
    word-wrap: break-word;
    /* Internet Explorer 5.5+ */
    white-space: -webkit-pre-wrap;
    /* Newer versions of Chrome/Safari*/
    /*word-break: break-all;*/
    white-space: normal;
    overflow-wrap: break-word;
}
</style>

<body class="index-page">

    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">

            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="assets/img/diskominfo/logo-info-sekolah.png" alt="file">
                    <!-- <h1 class="sitename">BizLand</h1> -->
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Beranda</a></li>
                        <li><a href="#about">Panduan Sekolah</a></li>
                        <li><a href="#services">CCTV</a></li>
                        <li><a href="#portfolio">Info Penting</a></li>
                        <li><a href="#team">Infografis</a></li>
                        <li><a href="#school">Sekolah</a></li>
                        <li><a href="#contact">Kontak</a></li>
                        <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Dropdown 1</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Dropdown 1</a></li>
                                        <li><a href="#">Deep Dropdown 2</a></li>
                                        <li><a href="#">Deep Dropdown 3</a></li>
                                        <li><a href="#">Deep Dropdown 4</a></li>
                                        <li><a href="#">Deep Dropdown 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Dropdown 2</a></li>
                                <li><a href="#">Dropdown 3</a></li>
                                <li><a href="#">Dropdown 4</a></li>
                            </ul>
                        </li>
                        <li><a href="#contact">Contact</a></li> -->
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
            </div>
        </div><!-- End Top Bar -->

    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <div class="container">
                <div class="row">
                    <div class="justify-content-center" data-aos="zoom-out">

                        <h1 class="text-center">Daftar Informasi Seputar <br><span>Sekolah Di Kota Semarang</span></h1>
                        <!-- <p>We are team of talented designers making websites with Bootstrap</p> -->

                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg">

                        <div class="info-wrap">
                            <table class="table">
                                <!-- <div class="card"> -->
                                <div class="top-table">
                                    <div class="filter-container">
                                        <label for="entries">Show:</label>
                                        <select id="entries">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>

                                    <div class="search-container">
                                        <label for="search">Search:</label>
                                        <input type="text" id="search" placeholder="Cari Data...">
                                    </div>
                                </div>
                                <thead>
                                    <tr>
                                        <th style="width: 10%">No</th>
                                        <th style="width: 40%">Nama Lokasi</th>
                                        <th style="width: 15%">Telepon</th>
                                        <th style="width: 20%">Link Map</th>
                                        <th style="width: 15%">Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="5">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-1">1</div>
                                                        <div class="col-md-4" style="text-align: left;">
                                                            <p class="card-title font-weight-bold"><b>SDN Bandarharjo
                                                                    01</b>
                                                            </p>
                                                            <p class="text-muted mb-0 wrapword">Jl. Cumi-Cumi Raya No.2,
                                                                Bandarharjo, Kec. Semarang Utara, Kota Semarang, Jawa
                                                                Tengah 50175</p>
                                                            <!-- <p class="text-muted mb-0 wrapword"><b>Fasilitas:</b> Dapur
                                                                Umum, Tenda, Toilet, Tempat Ibadah, Free Buka & Sahur,
                                                                Towing, Pos Kesehatan, Pos Komunikasi</p> -->
                                                        </div>
                                                        <div class="col-md-2">
                                                            <a href="tel://-" target="_blank"><button
                                                                    class="btn btn-info">-</button></a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="https://www.google.com/maps/dir/Current+Location/-7.040018,110.421374/@-7.040018,110.421374,17z?entry=ttu"
                                                                target="_blank"><button class="btn btn-primary">Buka
                                                                    Map</button></a>
                                                            <p>Jarak : 11.02 km</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <img src="/uploads/data_lokasi/20240328092020-2024-03-28data_lokasi092017.webp"
                                                                width="100%" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="5">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-1">2</div>
                                                        <div class="col-md-4" style="text-align: left;">
                                                            <p class="card-title font-weight-bold"><b>SDN Bandarharjo
                                                                    02</b>
                                                            </p>
                                                            <p class="text-muted mb-0 wrapword">Jl. Lodan Raya No.1,
                                                                Bandarharjo, Kec. Semarang Utara, Kota Semarang, Jawa
                                                                Tengah 50175</p>
                                                            <!-- <p class="text-muted mb-0 wrapword"><b>Fasilitas:</b> Dapur
                                                                Umum, Tenda, Toilet, Tempat Ibadah, Free Buka & Sahur,
                                                                Towing, Pos Kesehatan, Pos Komunikasi</p> -->
                                                        </div>
                                                        <div class="col-md-2">
                                                            <a href="tel://-" target="_blank"><button
                                                                    class="btn btn-info">-</button></a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="https://www.google.com/maps/dir/Current+Location/-7.040018,110.421374/@-7.040018,110.421374,17z?entry=ttu"
                                                                target="_blank"><button class="btn btn-primary">Buka
                                                                    Map</button></a>
                                                            <p>Jarak : 10.07 km</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <img src="/uploads/data_lokasi/20240328092020-2024-03-28data_lokasi092017.webp"
                                                                width="100%" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="5">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-1">3</div>
                                                        <div class="col-md-4" style="text-align: left;">
                                                            <p class="card-title font-weight-bold"><b>SD Negeri
                                                                    Bangetayu Kulon</b>
                                                            </p>
                                                            <p class="text-muted mb-0 wrapword">Jl. Bangetayu Raya,
                                                                Bangetayu Kulon, Kec. Genuk, Kota Semarang, Jawa Tengah
                                                                50115</p>
                                                            <!-- <p class="text-muted mb-0 wrapword"><b>Fasilitas:</b> Dapur
                                                                Umum, Tenda, Toilet, Tempat Ibadah, Free Buka & Sahur,
                                                                Towing, Pos Kesehatan, Pos Komunikasi</p> -->
                                                        </div>
                                                        <div class="col-md-2">
                                                            <a href="tel://-" target="_blank"><button
                                                                    class="btn btn-info">-</button></a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="https://www.google.com/maps/dir/Current+Location/-7.040018,110.421374/@-7.040018,110.421374,17z?entry=ttu"
                                                                target="_blank"><button class="btn btn-primary">Buka
                                                                    Map</button></a>
                                                            <p>Jarak : 8.07 km</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <img src="/uploads/data_lokasi/20240328092020-2024-03-28data_lokasi092017.webp"
                                                                width="100%" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Baris Lainnya -->
                                </tbody>
                            </table>

                            <div class="bottom-table">
                                <div class="entries-info" style="font-size: 16px; color: #666;">
                                    Showing 1 to 10 of 16 entries
                                </div>
                                <!-- Disabled and active states -->
                                <nav aria-label="...">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"
                                                aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- End Disabled and active states -->
                            </div>

                        </div>

                    </div>

                </div>

        </section><!-- /Contact Section -->


    </main>
    <footer id="footer" class="footer">
        <!-- < id="footer" class="footer section"> -->
        <div class="container-footer" class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="container" class="container-footer" data-aos="fade-up" data-aos-delay="100">


                <div class="widgets-section">

                    <div class="auto-container">

                        <div class="row">

                            <!--Big Column-->

                            <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">

                                <div class="row">

                                    <!--Footer Column-->

                                    <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">

                                        <div class="footer-widget about-widget">

                                            <div class="logo">
                                                <a href="/">
                                                    <img src="assets/img/diskominfo/logo-info-sekolah.png" alt=""
                                                        class="logo-image pb-3">
                                                </a>
                                            </div>
                                            <div class="text">

                                                <p>Info Mudik 2024 adalah Portal Website Dapatkan informasi seputar
                                                    mudik tahun
                                                    2024 Kota Semarang disini.</p>

                                            </div>



                                        </div>

                                    </div>



                                    <!--Footer Column-->

                                    <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">

                                        <div class="footer-widget useful-links">

                                            <h2 class="widget-title" style="color :white">Link Terkait</h2>

                                            <ul class="user-links">
                                                <li><a target="_blank"
                                                        href="https://semarangkota.go.id/">Semarangkota.go.id</a>
                                                </li>
                                                <li><a target="_blank" href="tel:112">Call Center 112</a></li>
                                                <li><a target="_blank"
                                                        href="https://sapambakita.semarangkota.go.id/">Sapa Mbak
                                                        Ita</a></li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <!--Big Column-->

                            <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">

                                <div class="row">

                                    <!--Footer Column-->

                                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">

                                        <!--Footer Column-->

                                        <div class="footer-widget contact-widget">

                                            <h2 class="widget-title" style="color :white">Kontak Kami</h2>

                                            <!--Footer Column-->

                                            <div class="widget-content">

                                                <ul class="contact-list">


                                                    <li style="padding-left:0px">



                                                        <div class="text"> <i class="fa fa-phone"></i> <a
                                                                href="https://wa.me/628112681112">08112681112</a>
                                                        </div>

                                                    </li>

                                                    <li style="padding-left:0px">



                                                        <div class="text"> <i class="fa fa-phone"></i> <a
                                                                href="tel:112">Call
                                                                Center Darurat 112</a></div>

                                                    </li>

                                                    <li style="padding-left:0px">



                                                        <div class="text"><i class="fa fa-envelope"></i> <a
                                                                href="mailto:infomudik@semarangkota.go.id">infomudik@semarangkota.go.id</a>
                                                        </div>

                                                    </li>



                                                    <li style="padding-left:0px">


                                                        <div class="text"> <i class="fa fa-map-marker"></i>
                                                            Jl.Pemuda No.148, Kota Semarang</div>

                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </div>



                                    <!--Footer Column-->

                                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">

                                        <!--Footer Column-->

                                        <div class="footer-widget instagram-widget pb-5">

                                            <h2 class="widget-title" style="color :white">Maps</h2>

                                            <div class="widget-content">

                                                <div class="outer clearfix">


                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2271230877363!2d110.41072091400328!3d-6.9825028703155265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708bb22883d313%3A0xc7b865c010d779de!2sDinas%20Komunikasi%2C%20Informatika%2C%20Statistik%20dan%20Persandian%20Kota%20Semarang!5e0!3m2!1sid!2sid!4v1649391979463!5m2!1sid!2sid"
                                                        width="100%" height="300" style="border:0;" allowfullscreen=""
                                                        loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>






                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <!--Footer Bottom-->

                <div class="footer-bottom">

                    <div class="auto-container">

                        <div class="inner-container clearfix">

                            <div class="copyright-text">

                                <p>© Copyright 2022 All Rights Reserved by Pemkot Semarang</p>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        </div>

        <!-- </section> -->

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>