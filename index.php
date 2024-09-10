<?php
include 'functions.php'; // Include file koneksi database
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$entries_per_page = isset($_GET['entries']) ? intval($_GET['entries']) : 10;

// Validasi nilai page dan entries_per_page
if ($page < 1) $page = 1;
if ($entries_per_page < 1) $entries_per_page = 10;

// Hitung offset
$offset = ($page - 1) * $entries_per_page;

// Query total data
$total_sql = "SELECT COUNT(*) AS total FROM sekolah";
$total_result = $conn->query($total_sql);
$total_row = $total_result->fetch_assoc();
$total_rows = $total_row['total'];
$totalPages = ceil($total_rows / $entries_per_page);

// Query data dengan LIMIT dan OFFSET
$sql = "SELECT id, nama_lokasi, alamat, link_maps, jarak, gambar FROM sekolah LIMIT $offset, $entries_per_page";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Informasi Sekolah</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/logo-kominfo.png" rel="icon">
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
                <a href="index.php" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="assets/img/diskominfo/logo-info-sekolah.png" alt="file">
                    <!-- <h1 class="sitename">BizLand</h1> -->
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="">Beranda</a></li>
                        <li><a href="#footer">Kontak</a></li>
                        <li><a href="admin\index.php">Login</a></li>

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
                                    <!-- <div class="filter-container">
                                        <label for="entries">Show:</label>
                                        <select id="entries">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div> -->


                                    <div class="search-container">
                                        <label for="search">Search:</label>
                                        <input type="text" id="search" placeholder="Cari Data...">
                                    </div>
                                   
                                </div>
                                <thead>
                                    <tr>
                                        <th style="width: 10%">No</th>
                                        <th style="width: 40%">Nama Lokasi</th>
                                        <th style="width: 25%">Link Map</th>
                                        <th style="width: 25%">Foto</th>
                                    </tr>
                                </thead>
                        

                                    <tbody>
                                    <?php
                                    if ($result->num_rows > 0) {
                                        $no = $offset + 1;
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $no++ . "</td>";
                                            echo "<td>" . $row["nama_lokasi"] . "<br>" . $row["alamat"] . "</td>";
                                            echo "<td><a href='" . $row["link_maps"] . "' target='_blank'><button class='btn btn-primary'>Buka Map</button></a><br>Jarak: " . $row["jarak"] . " km</td>";
                                            echo "<td><img src='admin/uploads/" . $row["gambar"] . "' style='width: 100px; height: auto;' /></td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='4'>No records found</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <div class="pagination">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
                                        <!-- Previous page link -->
                                        <li class="page-item <?php if ($page <= 1) echo 'disabled'; ?>">
                                            <a class="page-link" href="<?php if ($page > 1) echo '?page=' . ($page - 1); ?>" aria-label="Previous">
                                                <span aria-hidden="true">&laquo; Prev</span>
                                            </a>
                                        </li>

                                        <!-- Page number links -->
                                        <?php
                                        $start_page = max(1, $page - 2); // Mulai dari dua halaman sebelumnya, jika ada
                                        $end_page = min($totalPages, $page + 2); // Sampai dua halaman setelah, jika ada

                                        for ($i = $start_page; $i <= $end_page; $i++) {
                                            $activeClass = ($i == $page) ? 'active' : '';
                                            echo "<li class='page-item $activeClass'><a class='page-link' href='?page=$i&entries=$entries_per_page'>$i</a></li>";
                                        }
                                        ?>

                                        <!-- Next page link -->
                                        <li class="page-item <?php if ($page >= $totalPages) echo 'disabled'; ?>">
                                            <a class="page-link" href="<?php if ($page < $totalPages) echo '?page=' . ($page + 1); ?>" aria-label="Next">
                                                <span aria-hidden="true">Next &raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
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
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get references to the elements
        const searchInput = document.getElementById('search');
        const entriesSelect = document.getElementById('entries');
        const tableBody = document.querySelector('tbody');

        // Function to filter rows based on search input
        function filterTable() {
            const searchText = searchInput.value.toLowerCase();
            const rows = tableBody.querySelectorAll('tr');

            rows.forEach(row => {
                const cells = row.querySelectorAll('td');
                let found = false;
                
                cells.forEach(cell => {
                    if (cell.textContent.toLowerCase().includes(searchText)) {
                        found = true;
                    }
                });

                if (found) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        // Function to handle pagination and number of entries
        function handleEntriesChange() {
            const entries = parseInt(entriesSelect.value, 10);
            const rows = tableBody.querySelectorAll('tr');

            rows.forEach((row, index) => {
                if (index < entries) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });

            // Apply search filter after changing the number of entries
            filterTable();
        }

        // Add event listeners
        searchInput.addEventListener('input', filterTable);
        entriesSelect.addEventListener('change', handleEntriesChange);

        // Initial call to display correct number of entries
        handleEntriesChange();
    });
</script>
<style>
    .filter-container {
        margin-bottom: 20px;
        display: flex;
        align-items: center;
    }

    .filter-container label {
        font-weight: bold;
        margin-right: 10px;
        color: #343a40; /* Warna teks label gelap */
    }

    .filter-container select {
        padding: 8px 12px;
        border: 1px solid #6c757d; /* Warna border abu-abu gelap */
        border-radius: 4px;
        background-color: #e9ecef; /* Warna latar belakang abu-abu sangat terang */
        color: #495057; /* Warna teks abu-abu gelap */
        font-size: 14px;
    }

    .filter-container select option {
        background-color: #f8f9fa; /* Warna latar belakang opsi abu-abu sangat terang */
        color: #495057; /* Warna teks abu-abu gelap */
    }

    .filter-container select:focus {
        border-color: #80bdff;
        outline: none;
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
    }
</style>

<script>
document.getElementById('entries').addEventListener('change', function() {
    const entries = this.value;
    const urlParams = new URLSearchParams(window.location.search);
    urlParams.set('entries', entries);
    window.location.search = urlParams.toString();
});
</script>


</body>

</html>