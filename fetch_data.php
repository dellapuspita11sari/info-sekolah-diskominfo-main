<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kominfokelurahan";

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
        ORDER BY id ASC
        LIMIT $offset, $entries_per_page";
$result = $conn->query($sql);

// Prepare data
$data = '<table class="table">
            <thead>
                <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 70%">Nama Lokasi</th>
                    <th style="width: 15%">Link Map</th>
                    <th style="width: 15%">Foto</th>
                </tr>
            </thead>
            <tbody>';
$no = $offset + 1; // Nomor urut awal berdasarkan halaman

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data .= "<tr>";
        $data .= "<td>" . $no++ . "</td>";
        $data .= "<td><strong>" . $row["nama_lokasi"] . "</strong><br>" . $row["alamat"] . "</td>";
        $data .= "<td><a href='" . $row["link_maps"] . "' target='_blank'><button class='btn btn-primary'>Buka Map</button></a><br>Jarak: " . $row["jarak"] . " km</td>";
        $data .= "<td>
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
        $data .= "</tr>";
    }
} else {
    $data .= "<tr><td colspan='4'>No records found</td></tr>";
}
$data .= '</tbody></table>';

// Pagination links

// $pagination = '<nav aria-label="Page navigation"><ul class="pagination">';
// if ($page > 1) {
//     $pagination .= '<li class="page-item"><a class="page-link" href="#" data-page="' . ($page - 1) . '">&laquo;</a></li>';
// }
// for ($i = 1; $i <= $totalPages; $i++) {
//     $active = ($i == $page) ? 'active' : '';
//     $pagination .= '<li class="page-item ' . $active . '"><a class="page-link" href="#" data-page="' . $i . '">' . $i . '</a></li>';
// }
// if ($page < $totalPages) {
//     $pagination .= '<li class="page-item"><a class="page-link" href="#" data-page="' . ($page + 1) . '">&raquo;</a></li>';
// }
// $pagination .= '</ul></nav>';


$pagination = '<nav aria-label="Page navigation"><ul class="pagination">';

// Tombol <<
if ($page > 1) {
    $pagination .= '<li class="page-item"><a class="page-link" href="#" data-page="' . ($page - 1) . '">&laquo;</a></li>';
} else {
    $pagination .= '<li class="page-item disabled"><span class="page-link">&laquo;</span></li>';
}

$range = 1; // Jumlah halaman di sekitar halaman saat ini yang akan ditampilkan

// Tampilkan halaman pertama dan ellipsis jika perlu
if ($page > ($range + 2)) {
    $pagination .= '<li class="page-item"><a class="page-link" href="#" data-page="1">1</a></li>';
    $pagination .= '<li class="page-item disabled"><span class="page-link">...</span></li>';
}

// Tampilkan halaman di sekitar halaman saat ini
for ($i = max($page - $range, 1); $i <= min($page + $range, $totalPages); $i++) {
    $active = ($i == $page) ? 'active' : '';
    $pagination .= '<li class="page-item ' . $active . '"><a class="page-link" href="#" data-page="' . $i . '">' . $i . '</a></li>';
}

// Tampilkan halaman terakhir dan ellipsis jika perlu
if ($page < ($totalPages - ($range + 1))) {
    $pagination .= '<li class="page-item disabled"><span class="page-link">...</span></li>';
    $pagination .= '<li class="page-item"><a class="page-link" href="#" data-page="' . $totalPages . '">' . $totalPages . '</a></li>';
}

// Tombol >>
if ($page < $totalPages) {
    $pagination .= '<li class="page-item"><a class="page-link" href="#" data-page="' . ($page + 1) . '">&raquo;</a></li>';
} else {
    $pagination .= '<li class="page-item disabled"><span class="page-link">&raquo;</span></li>';
}

$pagination .= '</ul></nav>';


// Output data and pagination
echo $data . $pagination;

$conn->close();
?>
