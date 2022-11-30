<?php
// memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';
// mengecek apakah di url ada nilai GET id
if (isset($_GET['id'])) {
  // ambil nilai id dari url dan disimpan dalam variabel $id
  $id = ($_GET["id"]);

  // menampilkan data dari database yang mempunyai id=$id
  $query = "SELECT * FROM lowongan WHERE id='$id'";
  $result = mysqli_query($koneksi2, $query);
  // jika data gagal diambil maka akan tampil error berikut
  if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi2) .
      " - " . mysqli_error($koneksi2));
  }
  // mengambil data dari database
  $data = mysqli_fetch_assoc($result);
  // apabila data tidak ada pada database maka akan dijalankan perintah ini
  if (!count($data)) {
    echo "<script>alert('Data tidak ditemukan pada database');window.location='jobs.php';</script>";
  }
} else {
  // apabila tidak ada data GET id pada akan di redirect ke index.php
  echo "<script>alert('Masukkan data id.');window.location='jobs.php';</script>";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
  <!-- icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title><?php echo $data['nama']; ?> | CDC FMIPA PAKUAN</title>
  <!-- CSS -->
  <style>
    <?php include 'assets/css/style.css'; ?>
  </style>
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
          <h3 class="fw-bold lead1">DETAIL LOWONGAN</h3>
        </div>
      </div>
    </div>
  <?php
    $no++; //untuk nomor urut terus bertambah 1
  }
  ?>


  <!-- End Jumbotron -->
  <!-- Lowongan -->
  <section id="lowongan">
    <div class="container mb-5">
      <div class="row text-center mb-4">
        <div class="col">
          <h4 class="title-h2">DETAIL LOWONGAN PEKERJAAN</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card-job mb-3 border">
            <img src="image/<?php echo $data['logo']; ?>" width="100" class="card-img-top" alt="img" />
          </div>
        </div>
        <div class="col-md-6">
          <input name="id" value="<?php echo $data['id']; ?>" hidden />
          <div class="card-job mb-3">
            <div class="card-job-body">
              <h5 class="fw-bold judul"><?php echo $data['nama']; ?></h5>
              <p><?php echo $data['perusahaan']; ?></p>
              <br />
              <div class="job-detail">
                <div class="detail1">
                  <h6 class="fw-bold">Pendidikan</h6>
                  <p><?php echo $data['pendidikan']; ?></p>
                  <h6 class="fw-bold">Jenis Kelamin</h6>
                  <p><?php echo $data['kelamin']; ?></p>
                  </p>
                </div>
                <div class="detail2">
                  <h6 class="fw-bold">Jenis Pekerjaan</h6>
                  <p><?php echo $data['tipe']; ?></p>
                  <h6 class="fw-bold">Pengalaman</h6>
                  <p><?php echo $data['pengalaman']; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card-job">
            <div class="card-job-body">
              <h5 class="fw-bold">Deskripsi Pekerjaan</h5>
              <p><?php echo $data['deskripsi']; ?></p>
              <br />
              <h5 class="fw-bold">Tanggung Jawab</h5>
              <p><?php echo $data['tanggung_jawab']; ?></p>
              <br />
              <h5 class="fw-bold">Kualifikasi</h5>
              <p><?php echo $data['kualifikasi']; ?></p>
              <br />
              <h5 class="fw-bold">Tentang Perusahaan</h5>
              <p><?php echo $data['tentang']; ?></p>
              <br />
              <h5 class="fw-bold">Informasi Lebih Lanjut</h5>
              <p><a href="<?php echo $data['link']; ?>" target="_blank"><?php echo $data['link']; ?></a></p>
              <br />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end Lowongan -->

  <!-- footer -->
  <?php include 'page/footer.php'; ?>
  <!-- end footer -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>