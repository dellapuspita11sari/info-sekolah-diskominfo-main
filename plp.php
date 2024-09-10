<?php
include 'functions.php'; // Include file koneksi database

// Ambil parameter dari URL
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$entries_per_page = isset($_GET['entries']) ? intval($_GET['entries']) : 10;
$search_query = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';

// Hitung offset
$offset = ($page - 1) * $entries_per_page;

// Query total data
$total_sql = "SELECT COUNT(*) AS total FROM sekolah WHERE nama_lokasi LIKE '%$search_query%' OR alamat LIKE '%$search_query%'";
$total_result = $conn->query($total_sql);
$total_row = $total_result->fetch_assoc();
$total_rows = $total_row['total'];
$total_pages = ceil($total_rows / $entries_per_page);

// Query data dengan pagination dan filter
$sql = "SELECT id, nama_lokasi, alamat, link_maps, jarak, gambar 
        FROM sekolah 
        WHERE nama_lokasi LIKE '%$search_query%' OR alamat LIKE '%$search_query%' 
        LIMIT $offset, $entries_per_page";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include the head elements here -->
</head>
<body class="index-page">
    <!-- Include header and main sections here -->

    <main class="main">
        <!-- Hero Section -->
        <!-- Include hero section here -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg">
                        <div class="info-wrap">
                            <table class="table">
                                <div class="top-table">
                                    <div class="filter-container">
                                        <label for="entries">Show:</label>
                                        <select id="entries">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>

                                    <div class="search-container">
                                        <label for="search">Search:</label>
                                        <input type="text" id="search" placeholder="Cari Data..." value="<?php echo htmlspecialchars($search_query); ?>">
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

                            <div class="bottom-table">
                                <div class="entries-info" style="font-size: 16px; color: #666;">
                                    Showing <?php echo $offset + 1; ?> to <?php echo min($offset + $entries_per_page, $total_rows); ?> of <?php echo $total_rows; ?> entries
                                </div>
                                <nav aria-label="...">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item <?php echo $page <= 1 ? 'disabled' : ''; ?>">
                                            <a class="page-link" href="?page=<?php echo $page - 1; ?>&entries=<?php echo $entries_per_page; ?>&search=<?php echo urlencode($search_query); ?>" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                            <li class="page-item <?php echo $i == $page ? 'active' : ''; ?>" aria-current="page">
                                                <a class="page-link" href="?page=<?php echo $i; ?>&entries=<?php echo $entries_per_page; ?>&search=<?php echo urlencode($search_query); ?>"><?php echo $i; ?></a>
                                            </li>
                                        <?php endfor; ?>
                                        <li class="page-item <?php echo $page >= $total_pages ? 'disabled' : ''; ?>">
                                            <a class="page-link" href="?page=<?php echo $page + 1; ?>&entries=<?php echo $entries_per_page; ?>&search=<?php echo urlencode($search_query); ?>">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Contact Section -->
    </main>
    <!-- Include footer and other scripts here -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get references to the elements
            const searchInput = document.getElementById('search');
            const entriesSelect = document.getElementById('entries');
            const tableBody = document.querySelector('tbody');

            // Function to handle entries change
            function handleEntriesChange() {
                const entries = parseInt(entriesSelect.value, 10);
                const urlParams = new URLSearchParams(window.location.search);
                urlParams.set('entries', entries);
                urlParams.set('page', 1); // Reset to page 1 when changing entries
                window.location.search = urlParams.toString();
            }

            // Add event listeners
            entriesSelect.addEventListener('change', handleEntriesChange);

            // Add event listener for search input
            searchInput.addEventListener('input', function() {
                const searchText = searchInput.value.toLowerCase();
                const urlParams = new URLSearchParams(window.location.search);
                urlParams.set('search', searchText);
                urlParams.set('page', 1); // Reset to page 1 when changing search
                window.location.search = urlParams.toString();
            });
        });
    </script>
</body>
</html>
