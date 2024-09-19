<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'functions.php'; // Sesuaikan dengan file koneksi Anda

$id = $_GET['id'] ?? '';

if (empty($id)) {
    die('ID tidak valid.');
}

// Mengambil data sekolah berdasarkan ID
$sql = "SELECT * FROM sekolah WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die('Data tidak ditemukan.');
}

$row = $result->fetch_assoc();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Sekolah</title>
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/logo-kominfo.png" />
    <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar and Header here -->

        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <!-- Header Content -->
            <!--  Header End -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Edit Data Sekolah</h5>
                        <form action="proses_edit.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
                            <input type="hidden" name="gambar_lama" value="<?php echo htmlspecialchars($row['gambar']); ?>">
                            <div class="mb-3">
                                <label for="nama_lokasi" class="form-label">Nama Lokasi</label>
                                <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" 
                                    value="<?php echo htmlspecialchars($row['nama_lokasi']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="link_maps" class="form-label">Link Maps</label>
                                <input type="text" class="form-control" id="link_maps" name="link_maps" 
                                    value="<?php echo htmlspecialchars($row['link_maps']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" 
                                    value="<?php echo htmlspecialchars($row['alamat']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="jarak" class="form-label">Jarak</label>
                                <input type="number" class="form-control" id="jarak" name="jarak" 
                                    value="<?php echo htmlspecialchars($row['jarak']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                                <?php if (!empty($row['gambar'])): ?>
                                    <img src="uploads/<?php echo htmlspecialchars($row['gambar']); ?>" alt="Current Image" 
                                        style="width: 100px; height: auto; display: block; margin-top: 10px;">
                                <?php endif; ?>
                            </div>
                            <a href="data.php" class="btn btn-danger rounded-2">Back</a>

                            <!-- <button type="button" class="btn btn-danger" onclick="window.history.back();">Back</button> -->
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sidebarmenu.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>
