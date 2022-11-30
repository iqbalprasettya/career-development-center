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
    <title>Struktur Organisasi | CDC FMIPA PAKUAN</title>
    <style>
        .tg {
            border-collapse: collapse;
            border-spacing: 0;
            margin-left: auto;
            margin-right: auto;
        }

        .tg td {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg .tg-c3ow {
            border-color: inherit;
            text-align: center;
            vertical-align: top;
        }

        .tg .tg-0pky {
            border-color: inherit;
            text-align: left;
            vertical-align: top;
        }
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
                    <h3 class="fw-bold lead1">STRUKTUR ORGANISASI</h3>
                </div>
            </div>
        </div>
    <?php
        $no++;
    }
    ?>

    <!-- End Jumbotron -->

    <!-- content -->
    <section id="struktur">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <h4 class="title-struktur">STRUKTUR FAKULTAS MIPA - UNIVERSITAS PAKUAN</h4>
                    <h4 class="title-struktur">PERIODE 2020 - 2025</h4>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col">
                    <div class="dosen-table" style="overflow: auto">
                        <table class="tg" style="table-layout: fixed; width: 913px">
                            <colgroup>
                                <col style="width: 39.75px" />
                                <col style="width: 535.75px" />
                                <col style="width: 437.75px" />
                            </colgroup>
                            <thead>
                                <tr>
                                    <th class="tg-c3ow">No</th>
                                    <th class="tg-c3ow">Jabatan</th>
                                    <th class="tg-c3ow">Nama Dosen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
                                $query = "SELECT * FROM struktural ORDER BY id ASC";
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
                                    <tr>
                                        <td class="tg-c3ow"><?php echo $no; ?></td>
                                        <td class="tg-0pky"><?php echo $row['jabatan']; ?></td>
                                        <td class="tg-0pky"><?php echo $row['nama']; ?></td>
                                    </tr>
                                <?php
                                    $no++; //untuk nomor urut terus bertambah 1
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end content -->


    <!-- footer -->
    <?php include 'page/footer.php'; ?>
    <!-- end footer -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>