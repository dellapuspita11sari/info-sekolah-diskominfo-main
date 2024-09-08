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

    <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style type="text/css">
    .logo-image {
        max-width: 100px;
        max-height: 50px;
        display: block;
        margin: 0 auto;
    }

    .table {
        border-spacing: 0 0.85rem !important;
    }

    .table .dropdown {
        display: inline-block;
    }

    .table td,
    .table th {
        vertical-align: middle;
        margin-bottom: 10px;
        border: none;
    }

    .table thead tr,
    .table thead th {
        border: none;
        font-size: 12px;
        letter-spacing: 1px;
        text-transform: uppercase;
        background: transparent;
    }

    .table td {
        background: #fff;
    }

    .table td:first-child {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .table td:last-child {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .avatar {
        width: 2.75rem;
        height: 2.75rem;
        line-height: 3rem;
        border-radius: 50%;
        display: inline-block;
        background: transparent;
        position: relative;
        text-align: center;
        color: #868e96;
        font-weight: 700;
        vertical-align: bottom;
        font-size: 1rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .avatar-sm {
        width: 2.5rem;
        height: 2.5rem;
        font-size: 0.83333rem;
        line-height: 1.5;
    }

    .avatar-img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .avatar-blue {
        background-color: #c8d9f1;
        color: #467fcf;
    }

    table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td:first-child:before,
    table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th:first-child:before {
        top: 28px;
        left: 14px;
        border: none;
        box-shadow: none;
    }

    table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td:first-child,
    table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th:first-child {
        padding-left: 48px;
    }

    table.dataTable>tbody>tr.child ul.dtr-details {
        width: 100%;
    }

    table.dataTable>tbody>tr.child span.dtr-title {
        min-width: 50%;
    }

    table.dataTable.dtr-inline.collapsed>tbody>tr>td.child,
    table.dataTable.dtr-inline.collapsed>tbody>tr>th.child,
    table.dataTable.dtr-inline.collapsed>tbody>tr>td.dataTables_empty {
        padding: 0.75rem 1rem 0.125rem;
    }

    div.dataTables_wrapper div.dataTables_length label,
    div.dataTables_wrapper div.dataTables_filter label {
        margin-bottom: 0;
    }

    @media (max-width: 767px) {
        div.dataTables_wrapper div.dataTables_paginate ul.pagination {
            -ms-flex-pack: center !important;
            justify-content: center !important;
            margin-top: 1rem;
        }
    }

    .btn-icon {
        background: #fff;
    }

    .btn-icon .bx {
        font-size: 20px;
    }

    .btn .bx {
        vertical-align: middle;
        font-size: 20px;
    }

    .dropdown-menu {
        padding: 0.25rem 0;
    }

    .dropdown-item {
        padding: 0.5rem 1rem;
    }

    .badge {
        padding: 0.5em 0.75em;
    }

    .badge-success-alt {
        background-color: #d7f2c2;
        color: #7bd235;
    }

    .table a {
        color: #212529;
    }

    .table a:hover,
    .table a:focus {
        text-decoration: none;
    }

    table.dataTable {
        margin-top: 12px !important;
    }

    .icon>.bx {
        display: block;
        min-width: 1.5em;
        min-height: 1.5em;
        text-align: center;
        font-size: 1.0625rem;
    }

    .btn {
        font-size: 0.9375rem;
        font-weight: 500;
        padding: 0.5rem 0.75rem;
    }

    .avatar-blue {
        background-color: white;
        color: #467fcf;
    }

    .avatar-pink {
        background-color: white;
        color: #f66d9b;
    }
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
                <div class="row gy-4">
                    <!-- <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out"> -->
                        <h1>Daftar Informasi Seputar <br><span>Sekolah Di Kota Semarang</span></h1>
                        <!-- <p>We are team of talented designers making websites with Bootstrap</p> -->
                        <!-- <div class="d-flex">
                            <a href="#about" class="btn-get-started">Get Started</a>
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                class="glightbox btn-watch-video d-flex align-items-center"><i
                                    class="bi bi-play-circle"></i><span>Watch
                                    Video</span></a>
                        </div> -->
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->
        

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
            </div><!-- End Section Title -->

            
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg">

                        <div class="info-wrap">
                            <table>
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
                                        <td>1</td>
                                        <td class="font-weight-bold mb-0">
                                            Posko Mudik Gombel
                                            <p class="text-muted mb-0 wrapword">Jl. Tanah Putih II, Ngesrep, Kec.
                                                Banyumanik, Kota Semarang, Jawa Tengah 50261</p>
                                            <p class="text-muted mb-0 wrapword"><b>Fasilitas</b> : Dapur Umum, Tenda,
                                                Toilet, Tempat Ibadah, Free Buka & Sahur, Towing, Pos Kesehatan, Pos
                                                Komunikasi</p>
                                        </td>
                                        <td>
                                            <a href="tel://-" target="_blank"><button
                                                    class="btn btn-info">-</button></a>
                                        </td>
                                        <td>
                                            <a href="https://www.google.com/maps/dir/Current+Location/-7.040018,110.421374/@-7.040018,110.421374,17z?entry=ttu"
                                                target="_blank"><button class="btn btn-primary">Buka Map</button></a>
                                            <p>Jarak : 6.07 km</p>
                                        </td>
                                        <td>
                                            <img src="/uploads/data_lokasi/20240328092020-2024-03-28data_lokasi092017.webp"
                                                width="100%" />
                                        </td>
                                    </tr>
                                    <!-- ... -->
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

        </section><!-- /Contact Section -->



        <!-- Contact Section -->
        <!-- </div> <section id="contact" class="contact section">


            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-5">

                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address</h3>
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div>
                            </div>

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55</p>
                                </div>
                            </div>

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email Us</h3>
                                    <p>info@example.com</p>
                                </div>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                                frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <label for="name-field" class="pb-2">Your Name</label>
                                    <input type="text" name="name" id="name-field" class="form-control" required="">
                                </div>

                                <div class="col-md-6">
                                    <label for="email-field" class="pb-2">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email-field" required="">
                                </div>

                                <div class="col-md-12">
                                    <label for="subject-field" class="pb-2">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject-field"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <label for="message-field" class="pb-2">Message</label>
                                    <textarea class="form-control" name="message" rows="10" id="message-field"
                                        required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </section> -->
        <!-- /Contact Section -->

    </main>
    <footer id="footer" class="footer">
        <section id="contact" class="contact section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="container" data-aos="fade-up" data-aos-delay="100">


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
                                                            class="logo-image">
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

                                                <h2 class="widget-title">Link Terkait</h2>

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

                                                <h2 class="widget-title">Kontak Kami</h2>

                                                <!--Footer Column-->

                                                <div class="widget-content">

                                                    <ul class="contact-list">

                                                        <!--<li style="padding-left:0px">

                           

                            <div class="text"> <i class="fa fa-clock"></i> Senin - Kamis : 08:00 - 15:00 WIB<br/>
                           <i class="fa fa-clock"></i> Jumat : 08:00 - 11:30 WIB 
                            </div>

                        </li>-->



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

                                            <div class="footer-widget instagram-widget">

                                                <h2 class="widget-title">Maps</h2>

                                                <div class="widget-content">

                                                    <div class="outer clearfix">


                                                        <iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2271230877363!2d110.41072091400328!3d-6.9825028703155265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708bb22883d313%3A0xc7b865c010d779de!2sDinas%20Komunikasi%2C%20Informatika%2C%20Statistik%20dan%20Persandian%20Kota%20Semarang!5e0!3m2!1sid!2sid!4v1649391979463!5m2!1sid!2sid"
                                                            width="100%" height="300" style="border:0;"
                                                            allowfullscreen="" loading="lazy"
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

        </section><!-- /Contact Section -->

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