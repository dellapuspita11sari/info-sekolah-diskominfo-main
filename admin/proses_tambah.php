<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kominfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
$nama_lokasi = $_POST['nama_lokasi'];
$alamat = $_POST['alamat'];
$link_maps = $_POST['link_maps'];
$jarak = $_POST['jarak'];

// Proses upload gambar
$gambar = $_FILES['gambar']['name'];
$gambar_tmp_name = $_FILES['gambar']['tmp_name'];
$gambar_size = $_FILES['gambar']['size'];
$gambar_error = $_FILES['gambar']['error'];
$gambar_type = $_FILES['gambar']['type'];

if ($gambar_error === 0) {
    if ($gambar_size < 5000000) { // Maksimal ukuran file 5MB
        $gambar_ext = pathinfo($gambar, PATHINFO_EXTENSION);
        $gambar_ext_lc = strtolower($gambar_ext);
        $allowed_exts = array("jpg", "jpeg", "png");

        if (in_array($gambar_ext_lc, $allowed_exts)) {
            // Generate new name for the image
            $gambar_new_name = uniqid("IMG-", true) . '.' . $gambar_ext_lc;
            $upload_dir = __DIR__ . '/uploads/';
            $upload_file = $upload_dir . $gambar_new_name;

            if (move_uploaded_file($gambar_tmp_name, $upload_file)) {
                // Prepare SQL statement
                $sql = "INSERT INTO sekolah (nama_lokasi, alamat, link_maps, jarak, gambar) VALUES (?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssss", $nama_lokasi, $alamat, $link_maps, $jarak, $gambar_new_name);

                if ($stmt->execute()) {
                    // Redirect to data.php with success message
                    header("Location: data.php?status=success");
                    exit;
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            } else {
                echo "Failed to upload file.";
            }
        } else {
            echo "Invalid file type.";
        }
    } else {
        echo "File is too big.";
    }
} else {
    echo "Error uploading file.";
}

$conn->close();
?>
