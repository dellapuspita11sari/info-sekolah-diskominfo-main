<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kominfo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Pagination and search logic
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$entries_per_page = isset($_GET['entries']) ? intval($_GET['entries']) : 10;
$search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';

// Validate page and entries_per_page values
if ($page < 1) $page = 1;
if ($entries_per_page < 1) $entries_per_page = 10;

// Calculate offset
$offset = ($page - 1) * $entries_per_page;

// Query total data
$total_sql = "SELECT COUNT(*) AS total FROM sekolah WHERE nama_lokasi LIKE '%$search%' OR alamat LIKE '%$search%'";
$total_result = $conn->query($total_sql);
$total_row = $total_result->fetch_assoc();
$total_rows = $total_row['total'];
$totalPages = ceil($total_rows / $entries_per_page);

// Query data with LIMIT and OFFSET
$sql = "SELECT id, nama_lokasi, alamat, link_maps, jarak, gambar FROM sekolah 
        WHERE nama_lokasi LIKE '%$search%' OR alamat LIKE '%$search%' 
        LIMIT $offset, $entries_per_page";
$result = $conn->query($sql);
?>
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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th style="width: 70%">Nama Lokasi</th>
                                        <th style="width: 15%">Link Map</th>
                                        <th style="width: 15%">Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($result->num_rows > 0) {
                                        $no = $offset + 1;
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $no++ . "</td>";
                                            echo "<td><strong>" . $row["nama_lokasi"] . "</strong><br>" . $row["alamat"] . "</td>";
                                            echo "<td><a href='" . $row["link_maps"] . "' target='_blank'><button class='btn btn-primary'>Buka Map</button></a><br>Jarak: " . $row["jarak"] . " km</td>";
                                            echo "<td>
                                                    <div style='width: 200px; height: 100px; overflow: hidden;'>
                                                        <img src='admin/uploads/" . $row["gambar"] . "' style='width: 200px; height: 100px; object-fit: cover; background-color: #f0f0f0; cursor: pointer;' class='img-thumbnail' data-toggle='modal' data-target='#previewModal" . $row["id"] . "' />
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class='modal fade' id='previewModal" . $row["id"] . "' tabindex='-1' role='dialog' aria-labelledby='previewLabel" . $row["id"] . "' aria-hidden='true'>
                                                    <div class='modal-dialog' role='document'>
                                                        <div class='modal-content'>
                                                        <div class='modal-header'>
                                                            <h5 class='modal-title' id='previewLabel" . $row["id"] . "'>Preview Gambar</h5>
                                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                            <span aria-hidden='true'>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class='modal-body'>
                                                            <img src='admin/uploads/" . $row["gambar"] . "' class='img-fluid' style='width: 100%; height: auto;' />
                                                        </div>
                                                        <div class='modal-footer'>
                                                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Tutup</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='4'>No records found</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <!-- Pagination -->
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <?php if ($page > 1) { ?>
                                        <li class="page-item">
                                            <a class="page-link" href="?page=<?php echo $page - 1; ?>&entries=<?php echo $entries_per_page; ?>&search=<?php echo urlencode($search); ?>" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                    <?php } ?>
                                    <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                                        <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                                            <a class="page-link" href="?page=<?php echo $i; ?>&entries=<?php echo $entries_per_page; ?>&search=<?php echo urlencode($search); ?>"><?php echo $i; ?></a>
                                        </li>
                                    <?php } ?>
                                    <?php if ($page < $totalPages) { ?>
                                        <li class="page-item">
                                            <a class="page-link" href="?page=<?php echo $page + 1; ?>&entries=<?php echo $entries_per_page; ?>&search=<?php echo urlencode($search); ?>" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright">
                &copy; 2024 <strong><span>Diskominfo Semarang</span></strong>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<?php $conn->close(); ?>
