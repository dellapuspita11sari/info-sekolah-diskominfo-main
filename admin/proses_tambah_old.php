<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kominfokelurahan";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
$nama_lokasi = $_POST['nama_lokasi'];
$alamat = $_POST['alamat'];
$link_maps = $_POST['link_maps'];
$jarak = $_POST['jarak'];
$gambar_files = $_FILES['gambar'];

$allowed_exts = array("jpg", "jpeg", "png");
$upload_dir = __DIR__ . '/uploads/';
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0755, true);
}

// Loop untuk setiap data
for ($i = 0; $i < count($nama_lokasi); $i++) {
    if (empty($nama_lokasi[$i]) || empty($alamat[$i]) || empty($link_maps[$i]) || empty($jarak[$i])) {
        continue; // Lewati data yang tidak lengkap
    }

    $gambar_tmp_name = $gambar_files['tmp_name'][$i];
    $gambar_name = $gambar_files['name'][$i];
    $gambar_error = $gambar_files['error'][$i];
    $gambar_size = $gambar_files['size'][$i];

    if ($gambar_error === 0 && $gambar_size < 5000000) {
        $gambar_ext = pathinfo($gambar_name, PATHINFO_EXTENSION);
        $gambar_ext_lc = strtolower($gambar_ext);

        if (in_array($gambar_ext_lc, $allowed_exts)) {
            $gambar_new_name = uniqid("IMG-", true) . '.' . $gambar_ext_lc;
            $upload_file = $upload_dir . $gambar_new_name;

            if (move_uploaded_file($gambar_tmp_name, $upload_file)) {
                $sql = "INSERT INTO sekolah (nama_lokasi, alamat, link_maps, jarak, gambar) VALUES (?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssss", $nama_lokasi[$i], $alamat[$i], $link_maps[$i], $jarak[$i], $gambar_new_name);

                if (!$stmt->execute()) {
                    error_log("Error inserting data: " . $stmt->error);
                }
                $stmt->close();
            }
        }
    }
}

$conn->close();
header("Location: data.php?status=success");
exit;
