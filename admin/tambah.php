<?php
session_start();

if (!isset($_SESSION["login"]) ) {
  header("Location: index.php");
  exit;
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Diskominfo</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/logo-kominfo.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="index.php" class="text-nowrap logo-img">
            <img src="assets/images/logos/logo-kominfoo.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="dashboard.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Data Sekolah</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="data.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Data</span>
              </a>
            </li>
          </ul>
         
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Tambah Data</h5>
              <div class="card">
                <div class="card-body">
                <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
                      <div class="mb-3">
                          <label for="nama_lokasi" class="form-label">Nama Lokasi</label>
                          <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" required placeholder="Masukan Nama Lokasi">
                      </div>
                      <div class="mb-3">
                          <label for="link_maps" class="form-label">Link Maps</label>
                          <input type="text" class="form-control" id="link_maps" name="link_maps" required placeholder="Masukan Tautan Maps">
                      </div>
                      <div class="mb-3">
                          <label for="alamat" class="form-label">Alamat</label>
                          <input type="text" class="form-control" id="alamat" name="alamat" required placeholder="Masukan Alamat Lokasi">
                      </div>

                      <div class="mb-3">
                          <label for="jarak" class="form-label">Jarak</label>
                          <input type="number" class="form-control" id="jarak" name="jarak" required placeholder="Masukan Jarak (dalam Kilometer)">
                      </div>

                      <div class="mb-3">
                          <label for="gambar" class="form-label">Gambar</label>
                          <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
                      </div>
 
                    <!-- <button type="button" class="btn btn-danger" onclick="window.history.back();">Back</button> -->
                    <a href="data.php" class="btn btn-danger rounded-2">Back</a>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
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