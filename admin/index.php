<?php
session_start();

if (isset($_SESSION["login"])) {
  header("Location:dashboard.php");
  exit;
}
require 'functions.php';

if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      $_SESSION["login"] = true;
      header("Location: dashboard.php");
      exit;
    }
  }

  $eror = true;
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
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="assets/images/logos/kominfo.png" width="120" alt="">
                </a>
                <p class="text-center">Masukan Username & Password Anda !!</p>
                <form action="" method="post">
                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                  </div>

                  <!-- Checkbox for show/hide password -->
                  <div class="mb-3">
                    <input type="checkbox" id="showPassword" onclick="togglePassword()"> Show Password
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <?php if (isset($eror)) : ?>
                      <a class="text-danger fw-bold text-center" href="" style="font-style: italic;">username atau password salah!!!</a>
                    <?php endif; ?>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-2 rounded-2" name="login">Login</button>
                  <button type="button" class="btn btn-danger w-100 py-8 fs-4 rounded-2" onclick="window.history.back();">Back</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  function togglePassword() {
    var passwordInput = document.getElementById("password");
    var showPasswordCheckbox = document.getElementById("showPassword");
    
    if (showPasswordCheckbox.checked) {
      passwordInput.type = "text"; // Change input type to text
    } else {
      passwordInput.type = "password"; // Change input type back to password
    }
  }
</script>
</body>

</html>