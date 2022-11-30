<?php
// memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';
// mengecek apakah di url ada nilai GET id
if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM struktural WHERE id='$id'";
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
        echo "<script>alert('Data tidak ditemukan pada database');window.location='admin.php?page=lowongan';</script>";
    }
} else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='admin.php?page=lowongan';</script>";
}

?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            Edit Data
        </div>
        <div class="card-body">
            <form method="POST" action="proses.php?aksi=edit5" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6">
                        <input name="id" value="<?php echo $data['id']; ?>" hidden />
                        <div class="form-group mb-2">
                            <label>Nama Dosen</label>
                            <input class="form-control" type="text" name="nama" value="<?php echo $data['nama']; ?>" autofocus="" required="" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-2">
                            <label>Jabatan Dosen</label>
                            <input class="form-control" type="text" name="jabatan" value="<?php echo $data['jabatan']; ?>" autofocus="" required="" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-md btn-block btn-dark mt-3">
                        Simpan
                    </button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>