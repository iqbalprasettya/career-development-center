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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Career Development Center FMIPA PAKUAN</title>
    <style>
        <?php include 'assets/css/style.css'; ?>
    </style>
</head>

<body id="home">
    <!-- Navbar -->
    <?php include 'page/navbar.php'; ?>
    <!-- End Navbar -->

    <!-- Jumbotron -->
    <!-- <div class="jumbotron-job backgound-banner-600 mb-5">
        <div class="banner-shadow"></div>
    </div> -->
    <?php
    // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
    $query = "SELECT * FROM interface ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($koneksi2, $query);
    //mengecek apakah ada error ketika menjalankan query
    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi2) .
            " - " . mysqli_error($koneksi2));
    }

    //buat perulangan untuk element tabel dari data mahasiswa
    $no = 1; //variabel untuk membuat nomor urut
    // hasil query akan disimpan dalam variabel $data dalam bentuk array
    // kemudian dicetak dengan perulangan while
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="jumbotron-job background-banner-400 mb-5" style="background-image: url('image/<?php echo $row['jumbotron']; ?>');">
            <div class="banner-shadow"></div>
        </div>
    <?php
        $no++; //untuk nomor urut terus bertambah 1
    }
    ?>

    <!-- End Jumbotron -->



    <!-- Lowongan -->
    <section id="kerjasama">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <h2 class="title-h2">LOWONGAN PEKERJAAN</h2>
                    <div id="underline" class="line1"></div>
                </div>
            </div>
            <div class="row justify-content-center border">
                <?php
                // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
                $query = "SELECT * FROM lowongan ORDER BY id ASC LIMIT 6";
                $result = mysqli_query($koneksi2, $query);
                //mengecek apakah ada error ketika menjalankan query
                if (!$result) {
                    die("Query Error: " . mysqli_errno($koneksi2) .
                        " - " . mysqli_error($koneksi2));
                }

                //buat perulangan untuk element tabel dari data mahasiswa
                $no = 1; //variabel untuk membuat nomor urut
                // hasil query akan disimpan dalam variabel $data dalam bentuk array
                // kemudian dicetak dengan perulangan while
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-md-6">
                        <a class="link-career" href="jobs.php?id=<?php echo $row['id']; ?>">
                            <div class="card-career border">
                                <img src="image/<?php echo $row['logo']; ?>" class="card-img-top" alt="" />
                                <div class="card-career-body">
                                    <h5><?php echo $row['nama']; ?></h5>
                                    <p><?php echo $row['perusahaan']; ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                    $no++; //untuk nomor urut terus bertambah 1
                }
                ?>
                <div class="col btn-career">
                    <a href="lowongan.php" class="btn btn-primary">More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end Lowongan -->

    <!--  -->

    <!-- Program PKL -->
    <section id="kerjasama">
        <div class="container mb-5">
            <div class="row text-center mb-4">
                <div class="col">
                    <h2 class="title-h2">PROGRAM PRAKTIK LAPANG</h2>
                    <div id="underline" class="line3"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
                $query = "SELECT * FROM praktik ORDER BY id ASC LIMIT 3";
                $result = mysqli_query($koneksi2, $query);
                //mengecek apakah ada error ketika menjalankan query
                if (!$result) {
                    die("Query Error: " . mysqli_errno($koneksi2) .
                        " - " . mysqli_error($koneksi2));
                }

                //buat perulangan untuk element tabel dari data mahasiswa
                $no = 1; //variabel untuk membuat nomor urut
                // hasil query akan disimpan dalam variabel $data dalam bentuk array
                // kemudian dicetak dengan perulangan while
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="image/<?php echo $row['gambar']; ?>" class="card-img-top border" alt="" />
                        <div class="card-body">
                        <h5 class="card- fw-bolder"><?php echo $row['judul']; ?></h5>
                                <p class="card-text"><?php echo substr($row['penjelasan'], 0, 170); ?>...</p>
                                <a href="praktik.php?page=detail-praktik&id=<?php echo $row['id']; ?>" class="btn btn-primary btn-more">Baca</a>
                        </div>
                    </div>
                </div>
                <?php
                    $no++; //untuk nomor urut terus bertambah 1
                }
                ?>


                
            </div>
        </div>
    </section>
    <!-- End Program PKL -->

    <!-- footer -->
    <?php include 'page/footer.php'; ?>
    <!-- end footer -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>