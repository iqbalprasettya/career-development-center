<?php
// session start
if (!empty($_SESSION)) {
} else {
  session_start();
}
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- CSS -->
  <style>
    <?php include 'assets/css/style.css'; ?>
  </style>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
  <!-- icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Peluang Kerjasama | CDC FMIPA PAKUAN</title>
</head>

<body id="home">
  <!-- Navbar -->
  <?php include 'page/navbar.php'; ?>
  <!-- End Navbar -->

  <!-- Jumbotron -->
  <?php
  
  $query = "SELECT * FROM interface ORDER BY id DESC LIMIT 1";
  $result = mysqli_query($koneksi2, $query);
 
  if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi2) .
      " - " . mysqli_error($koneksi2));
  }

  
  $no = 1; 
 
  while ($row = mysqli_fetch_assoc($result)) {
  ?>
    <div class="jumbotron-job background-banner-400 mb-5" style="background-image: url('image/<?php echo $row['jumbotron']; ?>');">
      <div class="banner-black">
        <div class="col-md-12 text-banner">
          <h3 class="fw-bold lead1">PELUANG KERJASAMA</h3>
        </div>
      </div>
    </div>
  <?php
    $no++; 
  }
  ?>
  <!-- End Jumbotron -->

  <!-- content -->
  <?php include "page/config.php"; ?>
  <!-- end conten -->


  <!-- footer -->
  <?php include 'page/footer.php'; ?>
  <!-- end footer -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>