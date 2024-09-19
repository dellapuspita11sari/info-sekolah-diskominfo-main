<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Informasi Sekolah</title>
    <link href="assets/img/logo-kominfo.png" rel="icon">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <style>
        .wrapword {
            white-space: -moz-pre-wrap !important;
            white-space: -pre-wrap;
            white-space: -o-pre-wrap;
            white-space: pre-wrap;
            word-wrap: break-word;
            white-space: -webkit-pre-wrap;
            overflow-wrap: break-word;
        }
        .address-cell {
            max-width: 200px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>

<body class="index-page">
    <header id="header" class="header sticky-top">
        <div class="branding d-flex align-items-center">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.php" class="logo d-flex align-items-center">
                    <img src="assets/img/diskominfo/logo-kita.png" alt="file">
                </a>
                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="">Beranda</a></li>
                        <li><a href="#footer">Kontak</a></li>
                        <li><a href="admin/index.php">Login</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </div>
    </header>

    <main class="main">
        <section id="hero" class="hero section light-background">
            <div class="container">
                <div class="row">
                    <div class="justify-content-center">
                        <h1 class="text-center">Daftar Informasi Seputar <br><span>Sekolah Di Kota Semarang</span></h1>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg">
                        <div class="info-wrap">
                            <!-- Search input -->
                            <div class="mb-3">
                                <input type="text" id="search" class="form-control" placeholder="Search...">
                            </div>

                            <!-- Tempat data sekolah -->
                            <div id="dataSekolah">
                                <!-- Data dan pagination akan ditampilkan di sini oleh AJAX -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright">
                &copy; 2024 <strong><span>Diskominfo Semarang</span></strong>
            </div>
        </div>
    </footer> -->

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
                                                    <img src="assets/img/diskominfo/logo-kita.png" alt=""
                                                        class="logo-image pb-3">
                                                </a>
                                            </div>
                                            <div class="text">

                                                <p>Informasi Seputar Sekolah 2024 adalah Portal Website Dapatkan informasi seputar
                                                    Sekolah tahun
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
                                                <li><a target="_blank"
                                                        href="https://diskominfo.semarangkota.go.id/">diskominfo.semarangkota.go.id</a></li>

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


                                                    <!-- <li style="padding-left:0px">



                                                        <div class="text"> <i class="fa fa-phone"></i> <a
                                                                href="https://wa.me/628112681112">08112681112</a>
                                                        </div>

                                                    </li>

                                                    <li style="padding-left:0px">



                                                        <div class="text"> <i class="fa fa-phone"></i> <a
                                                                href="tel:112">Call
                                                                Center Darurat 112</a></div>
                                                    </li> -->

                                                    <li style="padding-left:0px">



                                                        <div class="text"><i class="fa fa-envelope"></i> <a
                                                                href="mailto:diskominfo@semarangkota.go.id">
                                                                diskominfo@semarangkota.go.id</a>
                                                        </div>

                                                    </li>



                                                    <li style="padding-left:0px">


                                                        <div class="text"> <i class="fa fa-map-marker"></i>
                                                        Jl.Pemuda 148, Sekayu, Semarang Tengah, Kota Semarang</div>

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

                                <div class="copy-right text-on-surface-variant1 caption1">©2024 Dinas
                            Komunikasi, Informatika, Statistik dan Persandian Kota Semarang.</div>


                        </div>

                    </div>

                </div>
            </div>
        </div>

        </div>

        <!-- </section> -->

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            function load_data(page = 1, entries = 10, search = '') {
                $.ajax({
                    url: 'fetch_data.php',
                    type: 'GET',
                    data: { page: page, entries: entries, search: search },
                    success: function(response) {
                        $('#dataSekolah').html(response);
                    }
                });
            }

            // Load initial data
            load_data();

            // Handle search input
            $('#search').on('keyup', function() {
                var search = $(this).val();
                load_data(1, 10, search); // Reload data with search term
            });

            // Handle pagination
            $(document).on('click', '.pagination .page-link', function(e) {
                e.preventDefault();
                var page = $(this).data('page');
                var search = $('#search').val();
                load_data(page, 10, search);
            });
        });
    </script>
</body>

</html>
