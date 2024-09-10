<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'functions.php'; // Sesuaikan dengan file koneksi Anda

$id = $_POST['id'] ?? '';
$nama_lokasi = $_POST['nama_lokasi'] ?? '';
$link_maps = $_POST['link_maps'] ?? '';
$alamat = $_POST['alamat'] ?? '';
$jarak = $_POST['jarak'] ?? '';
$gambar_lama = $_POST['gambar_lama'] ?? ''; // Nama file gambar lama

if (empty($id) || empty($nama_lokasi) || empty($link_maps) || empty($alamat) || empty($jarak)) {
    die('Data tidak lengkap.');
}

// Menangani upload gambar baru
$gambar_baru = '';
if (!empty($_FILES['gambar']['name'])) {
    $gambar_baru = uniqid() . '.' . pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
    $upload_dir = __DIR__ . '/uploads/';
    $upload_file = $upload_dir . $gambar_baru;

    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $upload_file)) {
        // Hapus gambar lama jika ada
        if (!empty($gambar_lama) && file_exists($upload_dir . $gambar_lama)) {
            unlink($upload_dir . $gambar_lama);
        }
    } else {
        die('Gagal mengunggah gambar.');
    }
} else {
    $gambar_baru = $gambar_lama; // Jika tidak ada gambar baru, tetap gunakan gambar lama
}

// Update data sekolah
$sql = "UPDATE sekolah SET nama_lokasi = ?, link_maps = ?, alamat = ?, jarak = ?, gambar = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sssssi', $nama_lokasi, $link_maps, $alamat, $jarak, $gambar_baru, $id);

if ($stmt->execute()) {
    echo 'Data berhasil diperbarui!';
    header('Location: data.php');
    exit;
} else {
    echo 'Gagal memperbarui data.';
}
?>
