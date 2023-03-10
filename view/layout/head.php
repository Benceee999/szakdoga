<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Users / Profile - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.php" class="logo d-flex align-items-center">
    <img src="assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">NiceAdmin</span>
  </a>
</div><!-- End Logo -->


<?php 
  if(isset($_SESSION['id']) ){
    if($_SESSION['jelszo'] == md5('Alap123')){
      echo "<script>alert('Kérem változtassa meg a jelszavát!');</script>";
    }
    echo '
    <i class="bi bi-list toggle-sidebar-btn"></i>
    ';
    require_once('view/layout/sidebar.php');
    echo '

      <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
      <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="assets/img/default.jpg" alt="Profil" title="Profil" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">'.$_SESSION['nev'].'</span>
      </a>

      <ul class="dropdown-menu dropdown-menu-right dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>'.$_SESSION['nev'].'</h6>
          <span>'.$_SESSION['jog'].'</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="index.php?page=profil">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>';
        if($_SESSION['jog'] == 'Admin' || $_SESSION['jog'] == 'vezető'){
        echo '<li>
          <a class="dropdown-item d-flex align-items-center" href="index.php?page=admin"">
            <i class="bi bi-person"></i>
            <span>Admin</span>
          </a>
        </li>';
        }
        echo '<li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="index.php?page=index&action=logout">
            <i class="bi bi-box-arrow-right"></i>
            <span>Kijelentkezés</span>
          </a>
        </li>

      </ul>';
  }else{
    echo'
    
      <a class="nav-link d-flex align-items-center" href="#">
        <span class="d-none d-md-block">Jelentkezés<span>
      </a>

    <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link nav-profile align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          Bejelentkezés
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <form class="px-4 py-3" action="index.php" method="post">
                <div class="form-group">
                    <label for="username">Felhasználónév</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Felhasználónév">
                </div>
                <div class="form-group">
                    <label for="password">Jelszó</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Jelszó">
                </div><br>
                <button type="submit" name="submit" class="btn btn-primary">Bejelentkezés</button>
                <br>
                <a class="form-group" href="#">Elfelejtett jelszó</a>
                <input type="hidden" name="action" value="login">
                <input type="hidden" name="page" value="index">
            </form>
        </div>
    ';

  }

  //print_r($_POST);
?>
  </li>
  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

</body>
<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>