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
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Tambah Data</h5>
        <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
          <?php for ($i = 1; $i <= 10; $i++): ?>
          <div class="card mb-3">
            <div class="card-body">
              <h6 class="fw-semibold">Data Lokasi #<?= $i ?></h6>
              <div class="mb-3">
                <label for="nama_lokasi_<?= $i ?>" class="form-label">Nama Lokasi</label>
                <input type="text" class="form-control" id="nama_lokasi_<?= $i ?>" name="nama_lokasi[]" required placeholder="Masukan Nama Lokasi">
              </div>
              <div class="mb-3">
                <label for="link_maps_<?= $i ?>" class="form-label">Link Maps</label>
                <input type="text" class="form-control" id="link_maps_<?= $i ?>" name="link_maps[]" required placeholder="Masukan Tautan Maps">
              </div>
              <div class="mb-3">
                <label for="alamat_<?= $i ?>" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat_<?= $i ?>" name="alamat[]" required placeholder="Masukan Alamat Lokasi">
              </div>
              <div class="mb-3">
                <label for="jarak_<?= $i ?>" class="form-label">Jarak</label>
                <input type="number" class="form-control" id="jarak_<?= $i ?>" name="jarak[]" required placeholder="Masukan Jarak (dalam Kilometer)">
              </div>
              <div class="mb-3">
                <label for="gambar_<?= $i ?>" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar_<?= $i ?>" name="gambar[]" accept="image/*" required>
              </div>
            </div>
          </div>
          <?php endfor; ?>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="data.php" class="btn btn-danger">Back</a>
        </form>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
