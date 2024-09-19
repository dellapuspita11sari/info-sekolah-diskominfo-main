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

$search = isset($_GET['search']) ? $_GET['search'] : '';
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$limit = 10;

// Hitung offset (untuk pagination)
$offset = ($page - 1) * $limit;

// Query total data (termasuk data yang di-search)
$total_sql = "SELECT COUNT(*) AS total FROM sekolah 
              WHERE nama_lokasi LIKE '%$search%' OR alamat LIKE '%$search%'";
$total_result = $conn->query($total_sql);
$total_rows = $total_result->fetch_assoc()['total'];
$total_pages = ceil($total_rows / $limit);

// Query data sekolah dengan limit, offset, dan urutan berdasarkan ID
$sql = "SELECT id, nama_lokasi, alamat, link_maps, jarak, gambar
        FROM sekolah
        WHERE nama_lokasi LIKE '%$search%' OR alamat LIKE '%$search%'
        ORDER BY id ASC
        LIMIT $offset, $limit";
$result = $conn->query($sql);

// Tampilkan data
$data = '<table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lokasi</th>
                    <th>Alamat</th>
                    <th>Link Maps</th>
                    <th>Jarak</th>
                    <th>Gambar</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>';

if ($result->num_rows > 0) {
    $no = $offset + 1; // Nomor urut awal berdasarkan halaman
    while ($row = $result->fetch_assoc()) {
        $data .= "<tr>";
        $data .= "<td>{$no}</td>"; // Menampilkan nomor urut
        $data .= "<td>{$row['nama_lokasi']}</td>";
        $data .= "<td class='address-cell'>{$row['alamat']}</td>";
        $data .= "<td><a href='{$row['link_maps']}' target='_blank'>View Map</a></td>";
        $data .= "<td>{$row['jarak']} Km</td>";
        $data .= "<td><img src='uploads/{$row['gambar']}' alt='Image' style='width: 200px; height: 100px;'></td>";
        $data .= "<td>
                  <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a> 
                  <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Are you sure you want to delete this item?');\">Delete</a>
                  </td>";
        $data .= "</tr>";
        $no++; // Increment nomor urut
    }
} else {
    $data .= "<tr><td colspan='7'>No records found</td></tr>";
}
$data .= '</tbody></table>';

// Pagination links
// $pagination = '<nav><ul class="pagination">';
// for ($i = 1; $i <= $total_pages; $i++) {
//     $active = ($i == $page) ? 'active' : '';
//     $pagination .= "<li class='page-item {$active}'><a href='#' class='page-link' data-page='$i'>$i</a></li>";
// }
// $pagination .= '</ul></nav>';

$pagination = '<nav><ul class="pagination">';

// Tombol <<
if ($page > 1) {
    $prev_page = $page - 1;
    $pagination .= "<li class='page-item'><a href='#' class='page-link' data-page='$prev_page'>&laquo;</a></li>";
} else {
    $pagination .= "<li class='page-item disabled'><span class='page-link'>&laquo;</span></li>";
}

$range = 1; // Jumlah halaman di sekitar halaman saat ini yang akan ditampilkan
$start = 1;
$end = $total_pages;

// Tampilkan halaman pertama
if ($page > ($range + 2)) {
    $pagination .= "<li class='page-item'><a href='#' class='page-link' data-page='1'>1</a></li>";
    $pagination .= "<li class='page-item disabled'><span class='page-link'>...</span></li>";
}

// Tampilkan halaman di sekitar halaman saat ini
for ($i = max($page - $range, 1); $i <= min($page + $range, $total_pages); $i++) {
    $active = ($i == $page) ? 'active' : '';
    $pagination .= "<li class='page-item {$active}'><a href='#' class='page-link' data-page='$i'>$i</a></li>";
}

// Tampilkan halaman terakhir
if ($page < ($total_pages - ($range + 1))) {
    $pagination .= "<li class='page-item disabled'><span class='page-link'>...</span></li>";
    $pagination .= "<li class='page-item'><a href='#' class='page-link' data-page='$total_pages'>$total_pages</a></li>";
}

// Tombol >>
if ($page < $total_pages) {
    $next_page = $page + 1;
    $pagination .= "<li class='page-item'><a href='#' class='page-link' data-page='$next_page'>&raquo;</a></li>";
} else {
    $pagination .= "<li class='page-item disabled'><span class='page-link'>&raquo;</span></li>";
}

$pagination .= '</ul></nav>';


// Gabungkan data dan pagination
echo $data . $pagination;

$conn->close();
?>
