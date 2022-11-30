<?php
// session start
if (!empty($_SESSION)) {
} else {
  session_start();
}
require 'koneksi.php';
if (!empty($_SESSION['ADMIN'])) {
} else {
  echo '<script>alert("Required Login Authorization!");window.location="login.php"</script>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashboard - SB Admin</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> -->
  <link href="assets/css/sb-admin.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

  <!-- Side NAV -->
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="admin.php">Dashboard Admin</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>


    <!-- Navbar-->
    <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <?php if (!empty($_SESSION['ADMIN'])) { ?>
            <li><a class="dropdown-item" href="proses.php?aksi=logout">Logout</a></li>
          <?php } else { ?>
            <li><a class="dropdown-item" href="login.php">Login</a></li>
          <?php } ?>

        </ul>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <!-- <a class="nav-link" href="admin.php?page=home">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a> -->
            
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link" href="admin.php?page=interface-admin">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-database"></i></div>
              Interface
            </a>
            <div class="sb-sidenav-menu-heading">Status Struktural</div>
            <a class="nav-link" href="admin.php?page=organisasi-admin">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-image"></i></div>
              Data Struktur Organisasi
            </a>
            <a class="nav-link" href="admin.php?page=struktural-admin">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-database"></i></div>
              Data Struktural
            </a>
            <div class="sb-sidenav-menu-heading">Karir</div>
            <a class="nav-link" href="admin.php?page=lowongan-admin">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-briefcase"></i></div>
              Data Lowongan
            </a>
            <a class="nav-link" href="admin.php?page=kerjasama-admin">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-handshake-simple"></i></div>
              Data Kerjasama
            </a>
            <a class="nav-link" href="admin.php?page=praktik-admin">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-desktop"></i></div>
              Data Program Praktik
            </a>

            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                  Authentication
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
              </nav>
            </div>

          </div>
        </div>

      </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <?php include "page/admin/config.php"; ?>
        </div>
      </main>
      <!-- <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; 2022</div>

          </div>
        </div>
      </footer> -->
    </div>
  </div>
  
  <script src='https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/6/tinymce.min.js'></script><script  src="./script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script><?php include "assets/js/scripts.js"; ?></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  
</body>

</html>