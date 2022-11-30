<?php
// memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';
// mengecek apakah di url ada nilai GET id
if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM praktik WHERE id='$id'";
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
        echo "<script>alert('Data tidak ditemukan pada database');window.location='praktik.php?page=more-praktik';</script>";
    }
} else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='praktik.php?page=more-praktik';</script>";
}

?>


<!-- kerjasama -->
<section id="kerjasama">
    <div class="container mb-5">
        <div class="row text-center mb-4">
            <div class="col">
                <h2 class="title-h2">DETAIL PROGRAM</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card-kerjasama mb-3">
                    <img src="image/<?php echo $data['gambar']; ?>" width="100" class="card-img-top border" alt="img" />
                </div>
            </div>
            <div class="col-md-6">
                <input name="id" value="<?php echo $data['id']; ?>" hidden />
                <div class="card-job mb-3">
                    <div class="card-job-body">
                        <h5 class="fw-bold judul"><?php echo $data['judul']; ?></h5>
                        <br />
                        <div class="job-detail">
                            <div class="detail1">
                                <p><?php echo $data['penjelasan']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card-job">
                    <div class="card-job-body">
                        <?php echo $data['deskripsi']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end kerjasama -->